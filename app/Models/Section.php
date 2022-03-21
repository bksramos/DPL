<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];

    /** Defining relations with users */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function hasAnyUsers($users)
    {
        return null !== $this->users()->whereIn('name', $users)->first();
    }

    public function hasAnyUser($user)
    {
        return null !== $this->users()->where('name', $user)->first();
    }
}
