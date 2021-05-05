<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'phone_number',
        'age',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
        'age',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 
     
     
    

    // Cette model User a plusieur cours 
    public function cours(){
        return $this->hasMany(Cour::class);
    }
    public function produit(){
        return $this->hasMany(User::class);
    }
    public function Cv(){
        return $this->hasMany(Cv::class);
    }

    // User::find(1)->cours
    // SELECT * from cours inner join users where users.id=cours.user_id AND cours.user_id=1
    // select * from cours inner join users where users.id=cours.user_id
}
