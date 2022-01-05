<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;


    protected $fillable =['firstname','lastname','mail','adresse','phone','image'];

    public function personneable()
    {
        return $this->morphTo();
    }
}