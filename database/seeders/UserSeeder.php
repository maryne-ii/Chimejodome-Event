<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use vendor\laravel\framework\src\Illuminate\Database\Connection;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //example admin
        $user0 = new User();
        $user0->name = "User 00";
        $user0->email = "user00@example.com";
        // $user0->password = Hash::make("password");
        $user0->password = "password";
        $user0->tel="080";
        $user0->role = 0;
        $user0->facebook_account="chiMeJoDome";
        $user0->instagram_account='chiMe_JoDome';
        $user0->line_account='chiMe The JoDome';
        $user0->save();
        //example staff
        $user1 = new User();
        $user1->name = "User Staff";
        $user1->email = "userStaff@example.com";
        $user1->password =Hash::make("password");
        $user1->tel="081";
        $user1->role = 1;
        $user1->facebook_account="mary";
        $user1->instagram_account='maaaary';
        $user1->line_account='ma the ry';
        $user1->save();
        //example student
        $user2 = new User();
        $user2->name = "User 02";
        $user2->email = "user02@example.com";
        $user2->password =Hash::make("password");
        $user2->tel="082";
        $user2->role = 2;
        $user2->faculty = 'comsci';
        $user2->facebook_account="shu shu";
        $user2->instagram_account='dome_shushu';
        $user2->line_account='shu the shu';
        $user2->year = 3;
        $user2->save();
        //example student who have event
        $user3 = new User();
        $user3->name = "User 03";
        $user3->email = "user03@example.com";
        $user3->password =Hash::make("password");
        $user3->tel="083";
        $user3->role = 2;
        $user3->faculty = 'comsci';
        $user3->facebook_account="jo jo";
        $user3->instagram_account='jo_jojo';
        $user3->line_account='jo the jo';
        $user3->year = 3;
        
        $user3->save();
        

        User::factory()//create student
        ->count(10)
        ->state(new Sequence(
            ['faculty' => 'comsci'],
            ['faculty' => 'engineer'],//faculty
            ['faculty' => 'art'],
        ))
        ->state(new Sequence(
            fn (Sequence $sequence) => [
            // 'password' => Hash::make("password"),//password
            // 'password' => "password",//password
            'year' =>fake()->numberBetween(1,4)//year
        ],
        ))
        ->create(
           ['role'=>2]);

        
        User::factory()//create staff
        ->count(3)
        // ->state(new Sequence(
        //     fn (Sequence $sequence) => [
        //     // 'password' => Hash::make("password"),//password
        //     'password' => "password",//password
        // ],
        // ))
        ->create(['role'=>1,]);


        // $user3 = User::find(4);
        // $user2 = User::find(3);

        $event = Event::factory()->count(10)
        ->state(new Sequence(
            ['location' => 'KU HALL'],
            ['location' => 'KU CENTER'],//faculty
            ['location' => 'KU COMSCI SPECIAL EVENT HALL'],
            ['location' => 'KU SPORT YARD'],
        ))
        ->state(new Sequence(
            ['header' => $user3->name],
        ))
        ->create();

    
        $event2 = Event::factory()->count(10)
        ->state(new Sequence(
            ['location' => 'KU HALL'],
            ['location' => 'KU CENTER'],//faculty
            ['location' => 'KU COMSCI SPECIAL EVENT HALL'],
            ['location' => 'KU SPORT YARD'],
        ))
        ->state(new Sequence(
            ['header' => $user3->name],
        ))
        ->create();

        $user2->joins()->attach($event);//user2(นักเรียนธรรมดา)เข้าร่วมevent(เข้าร่วม 3 event)
        $user3->organizes()->attach($event);
        $user3->organizes()->attach($event2);//user3(นักเรียนที่สร้างevent)สร้างevent
        








        // $user3->joins()->has(Event::factory()->count(3))
        //      ->create();

        // $user3 = User::factory(5)//create student with event
        //     ->has(Event::factory()->count(3))
        //     ->create();
    }
}
