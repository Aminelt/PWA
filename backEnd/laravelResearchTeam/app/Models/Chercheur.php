<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chercheur extends Model
{
    use HasFactory;
    public function Compte(){
        return $this->HasOne(User::class);
   
     }
    //  public function administrateurherite(){
    //   return $this->morphOne(User::class, 'id');
    // }

    public function chercheurable()
    {
        return $this->morphTo();
    }

    public function personne()
    {
        return $this->morphOne('App\Models\Personne', 'personneable');
    }



}