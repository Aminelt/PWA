<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phase;

class Task extends Model
{
    use HasFactory;

    public function phase(){
        return $this->belongsTo(Phase::class);
    }
}
