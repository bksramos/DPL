<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalForm extends Model
{
    protected $guarded = [];

    /** Defining relations with TechnicalFormMember */
    public function TechnicalFormMembers()
    {
        return $this->hasMany(TechnicalFormMember::class);
    }
}
