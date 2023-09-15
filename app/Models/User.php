<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function basics()
    {
        return $this->hasMany(Basic::class);
    }
    public function Basicsall()
    {
        return $this->hasOne(Basic::class);
    }
   public function education(){
    return $this->hasMany(Education::class);

   }
   public function Educationall()
    {
        return $this->hasOne(Education::class);
    }

    public function experiances(){
        return $this->hasMany(Experiance::class);
    }
    public function Experiancesall(){
        return $this->hasOne(Experiance::class);

    }
    public function families(){
        return $this->hasMany(Family::class);
    }
    public function Familiesall(){
        return $this->hasOne(Family::class);
    }
}

