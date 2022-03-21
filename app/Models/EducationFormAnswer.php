<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormAnswer extends Model
{
    protected $guarded = [];

    public function EducationFormQuestions()
    {
        return $this->belongsTo(EducationFormQuestion::class)->withTimestamps();
    }
}
