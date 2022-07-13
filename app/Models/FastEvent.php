<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FastEvent extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title', 'type', 'start', 'end', 'color'
    ];


    /** Defining relations with event_types */
    public function event_types()
    {
        return $this->belongsToMany(EventType::class)->withTimestamps();
    }

    public function hasAnyEventTypes($event_types)
    {
        return null !== $this->event_types()->whereIn('name', $event_types)->first();
    }

    public function hasAnyEventType($event_type)
    {
        return null !== $this->event_types()->where('name', $event_type)->first();
    }
}
