<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiance extends Model
{
    protected $fillable=['user_id','company1','number1','reponsibility1','company2','number2','responsibility2'];
}
