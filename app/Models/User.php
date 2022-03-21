<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Defining relations with roles */
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function hasAnyRoles($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasAnyRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    /** Defining relations with sections */
    public function sections()
    {
        return $this->belongsToMany(Section::class)->withTimestamps();
    }

    public function hasAnySections($sections)
    {
        return null !== $this->sections()->whereIn('name', $sections)->first();
    }

    public function hasAnySection($section)
    {
        return null !== $this->sections()->where('name', $section)->first();
    }

}
