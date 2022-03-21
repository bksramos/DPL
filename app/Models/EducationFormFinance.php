<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationFormFinance extends Model
{
    protected $fillable = [
        'cost_help',
        'salary',
        'housing_assistance',
        'baggage_transport',
        'daily',
        'personal_transport_1',
        'personal_transport_2',
        'course_cost',
        'total_annual',
        'course_year',
    ];

    public function EducationForms()
    {
        return $this->belongsTo(EducationForm::class)->withTimestamps();
    }
}
