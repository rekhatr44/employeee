<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable=['user_id','school1','degree1','percentage1','school2','degree2','percentage2'];
}
