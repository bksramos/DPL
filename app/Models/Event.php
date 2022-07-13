<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'type', 'start', 'end', 'color', 'description'
    ];

    public function getStartAttribute($value)
    {
        $dateStart = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeStart = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->start = ($timeStart == '00:00:00' ? $dateStart : $value);
    }

    public function getEndAttribute($value)
    {
        $dateEnd = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('Y-m-d');
        $timeEnd = Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('H:i:s');

        return $this->end = ($timeEnd == '00:00:00' ? $dateEnd : $value);
    }

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
