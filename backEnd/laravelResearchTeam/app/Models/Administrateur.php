<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;


    protected $fillable =['id_user'];


  public function compte(){
     return $this->HasOne(User::class);

  }
  public function administrateurherite(){
    return $this->morphOne(User::class, 'id');
  }


  public function personne()
    {
        return $this->morphOne('App\Models\Personne', 'personneable');
    }
}