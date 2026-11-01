<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Employee extends Model
{
    use softDeletes;
    protected $fillable = ['name', 'email', 'phone', 'address'];
}
