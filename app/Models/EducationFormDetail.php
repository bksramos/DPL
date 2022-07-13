<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormDetail extends Model
{
    protected $fillable = [
        'goals', 'subject_description', 'research_line', 'similar_course', 'institution_similar_course', 'importance',
        'justification', 'designated', 'vacancies_requested', 'prerequisites', 'destination_after_course', 
        'function_after_course', 'desired_training', 'pac'
    ];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class, 'education_form_id')->withTimestamps();
    }
}
