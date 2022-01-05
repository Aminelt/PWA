<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chercheurs extends Model
{
    use HasFactory;
    public function Compte(){
        return $this->HasOne(User::class);
   
     }

     public function chercheurrherite(){
        return $this->morphOne('Appchercheur', 'chercheurable');
      }
}
