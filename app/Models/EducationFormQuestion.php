<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormQuestion extends Model
{
    protected $guarded = [];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class)->withTimestamps();
    }

    public function EducationFormAnswers()
    {
        return $this->hasMany(EducationFormAnswer::class)->withTimestamps();
    }
}
