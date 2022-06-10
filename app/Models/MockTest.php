<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockTest extends Model
{
    protected $table = 'mock_test';
    protected $fillable = [
        'sno',
        'cname',
        'media'
    ];
}
