<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;

    // On va faire la relation de cette model avec la model User  
    // Cette model cours appartient à un utilisateur 

    public function user(){
        return $this->belongsTo(User::class);
    }


}
