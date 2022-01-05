<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamLeader extends Model
{
    use HasFactory;

    public function team()
    {
        return $this->belongsTo(Team::class);
    }


    public function chercheur()
    {
        return $this->morphOne('App\Models\Chercheur', 'chercheurable');
    }

}