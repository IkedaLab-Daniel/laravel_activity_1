<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // > Exercise 6

    protected $fillable = [
        'name',
        'email',
        'age'
    ];
    
}
