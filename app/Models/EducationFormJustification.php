<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormJustification extends Model
{
    protected $fillable = [
        'detailed_justification'
    ];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class, 'education_form_id')->withTimestamps();
    }
}
