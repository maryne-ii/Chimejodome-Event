<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Event;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Gate;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function index()
     {
         $users = User::get();
         return view('admins.userList', [
             'users' => $users
         ]);
     }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }



    public function delete(Request $request, User $user)
    {
        // $user->delete();
        DB::table('users')->where('id',$user->id)->delete();

        // return view('admins.userList',[
        //     'users' => User::get(),
        // ]);
        // return redirect()->back();
        return redirect()->route('UsersList');


    }
    /**
     * Update the user's profile information.
     */
    public function update(Request $request, User $user_update): RedirectResponse
    {
        // $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        // return Redirect::route('profiles.index')->with('status', 'profile-updated');

        // $user = new User();
        // $user = $user_update;
        // Gate::authorize('update', $user_update);
        $id = $request->get('id');
        $user = User::find($id);
        $request->validate([
            'name' => ['required', 'min:4', 'max:255']
        ]);
        $user->name = $request->get('name');
        $user->year = $request->get('year');
        $user->faculty = $request->get('faculty');
        $user->tel = $request->get('tel');
        $user->facebook_account = $request->get('facebook_account');
        $user->line_account = $request->get('line_account');
        $user->instagram_account = $request->get('instagram_account');
        if ($request->file('profile_image')) {
            $image_file = $request->file('profile_image'); // image->poster
            $file_name = now()->getTimestamp() . "." . $image_file->getClientOriginalExtension();
            $image_file->storeAs('public/' . $file_name);
            $image_path = "storage/" . $file_name;
            $user->profile_image = $image_path;
        }
        $user->save();
        // $user_update->save();
        // $user_update->update([
        //     'name' => $request->get('name'),
        //     'year' => $request->get('year'),
        //     'faculty' => $request->get('faculty'),
        //     'tel' => $request->get('tel'),
        //     'facebook_account' => $request->get('facebook_account'),
        //     'line_account' => $request->get('line_account'),
        //     'instagram_account' => $request->get('instagram_account')
        // ]);
        // print_r($request->get('id'));
        return redirect()->route('profile.index')->with('success','You profile have updated');
    }
    public function storeJoinUser(Request $request,User $user)
    {
        // Gate::authorize('update', $event); UserPolicy do isJoin in UserModel
        $event = Event::findOrFail($request->input('event_id'));
        $user->joins()->attach($event);

        return redirect()->route('users.index');
    }

    public function getAllUser(){

        $users = User::get();
        return view('admins.userList', [
            'users' => $users
        ]);
    }

    public function getAllStudent(Event $event){

        dd($event->name);

        $users = User::get()->where('role',2);
        return view('events.pickOrganize', [
            'users' => $users,
            'event' => $event
        ]);
    }



    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
