<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steam extends Model
{
    protected $table = 'steam';
    protected $fillable = [
        'id',
        'sname',
        'designation',
        'branch',
        'course',
        'year',
        'email',
        'mobile',
    ];
}
