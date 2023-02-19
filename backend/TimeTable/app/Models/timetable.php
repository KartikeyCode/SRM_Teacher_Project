<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher',
        'day_order',
        'subject',
        'section',
        'class_start',
        'class_end'
    ];
}