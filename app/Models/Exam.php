<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exam';
    protected $fillable = [
        'sno',
        'cname',
        'syllabus',
        'media',
    ];
}
