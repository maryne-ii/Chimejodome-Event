<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // public function setPasswordAttribute($password)
    // {
    //     $this->attributes['password'] = Hash::make($password);
    // }
    // public function events(): BelongsToMany{
    //     return $this->belongsToMany(Event::class,"user_organize_event");
    // }
    public function confirms(): HasMany
    {
        return $this->hasMany(Event::class);
    }
    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }
    public function joins(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, "user_join_event");
    }
    public function organizes(): BelongsToMany
    {
        return $this->belongsToMany(Event::class, "user_organize_event");
    }



    // public function joins(): BelongsToMany{
    //     return $this->belongsToMany(Event::class)->withPivot('join');
    // }
    // public function organizes(): BelongsToMany{
    //     return $this->belongsToMany(Event::class)->wherePivot('type', 'organize');
    // }
}
