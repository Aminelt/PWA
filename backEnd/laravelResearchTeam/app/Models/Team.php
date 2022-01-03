<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'teamLeader_id'
    ];

    /**
     * Get the leader associated with the team.
     */

    public function leader()
    {
        return $this->hasOne(TeamLeader::class);
    }

    
    /**
     * Get the member for the team.
     */
    public function members()
    {
        return $this->hasMany(TeamMember::class);
    }



}