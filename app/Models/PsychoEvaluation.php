<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsychoEvaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'type', 'number', 'year', 'publish_date', 'file'
    ];
}
