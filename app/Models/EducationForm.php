<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationForm extends Model
{
    protected $guarded = [];

    /** Defining relations with EducationFormFinance */
    public function EducationFormFinances()
    {
        return $this->hasMany(EducationFormFinance::class);
    }

    /** Defining relations with EducationFormDetail */
    public function EducationFormDetails()
    {
        return $this->hasOne(EducationFormDetail::class);
    }

    /** Defining relations with EducationFormJustification */
    public function EducationFormJustifications()
    {
        return $this->hasOne(EducationFormJustification::class);
    }

    /** Defining relations with DescriptionQuestion */
    public function EducationFormQuestions()
    {
        return $this->hasMany(EducationFormQuestion::class);
    }

    /** Defining relations with EducationFormPrevious */
    public function EducationFormPreviouses()
    {
        return $this->hasMany(EducationFormPrevious::class);
    }

    /** Defining relations with EducationFormFeature */
    public function EducationFormFeatures()
    {
        return $this->hasOne(EducationFormFeature::class);
    }
}
