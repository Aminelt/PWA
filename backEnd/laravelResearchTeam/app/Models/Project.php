<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Phase;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'projectCost',
        'projectDomain',
        'status',
        'startDate',
        'endDate',
        'team_id'
    ];


     /**
     * Get the Team associated with the project.
     */

    public function team()
    {
        return $this->hasOne(Team::class);
    }


    
    /**
     * Get the comments for the blog post.
     */
    public function phases()
    {
        return $this->hasMany(Phase::class);
    }


}