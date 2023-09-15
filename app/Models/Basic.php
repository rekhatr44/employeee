<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    protected $fillable=['user_id','firstname','lastname','email','phone','dob','role','department','salary'];
}
