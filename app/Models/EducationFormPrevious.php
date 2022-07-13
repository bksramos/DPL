<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormPrevious extends Model
{
    protected $fillable = [];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class, 'education_form_id')->withTimestamps();
    }
}
