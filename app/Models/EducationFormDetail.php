<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormDetail extends Model
{
    protected $guarded = [];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class)->withTimestamps();
    }
}
