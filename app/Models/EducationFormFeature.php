<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormFeature extends Model
{
    protected $fillable = [
        'impact', 'mission_type', 'institutional_commitments', 'training_systems', 
        'capacity_adherence', 'rh_training', 'bilateral'
    ];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class, 'education_form_id')->withTimestamps();
    }
}
