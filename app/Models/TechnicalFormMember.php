<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalFormMember extends Model
{
    protected $fillable = [
        'of_amount', 'of_title', 'gr_amount', 'gr_title', 'cv_amount'
    ];

    public function TechnicalForm()
    {
        return $this->belongsTo(TechnicalForm::class, 'technical_form_id')->withTimestamps;
    }
}
