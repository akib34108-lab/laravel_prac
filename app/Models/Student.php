<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Student extends Model
{
    use softDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
