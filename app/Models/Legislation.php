<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legislation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'type', 'number', 'digital_initials', 'year', 'publish_date', 'file'
    ];
}
