<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;

  public function compte(){
     return $this->HasOne(User::class);

  }
  public function administrateurherite(){
    return $this->morphOne(User::class, 'id');
  }
}
