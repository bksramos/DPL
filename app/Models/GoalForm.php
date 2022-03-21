<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalForm extends Model
{
    protected $guarded = [];

    /** Defining relations with sections */
    public function sections()
    {
        return $this->belongsToMany(Section::class)->withTimestamps();
    }
    public function hasAnySections($sections)
    {
        return null !== $this->sections()->whereIn('name', $sectons)->first();
    }

    public function hasAnySection($section)
    {
        return null !== $this->sections()->where('name', $section)->first();
    }
}
