<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TeamLeadersResource;
use App\Models\TeamLeader;
class TeamLeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         return TeamLeadersResource::collection(TeamLeader::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
       

        $teamLeader = TeamLeader::create([
                      
        ]);

        return new TeamLeadersResource($teamLeader);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamLeader  $teamLeader
     * @return \Illuminate\Http\Response
     */
    public function show(TeamLeader $teamLeader)
    {
         return new TeamLeadersResource($teamLeader);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamLeader  $teamLeader
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamLeader $teamLeader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamLeader  $teamLeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamLeader $teamLeader)
    {
        $teamLeader->update([
                   
        ]);

        return new TeamLeadersResource($teamLeader);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamLeader  $teamLeader
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamLeader $teamLeader)
    {
         $teamLeader->delete();
         return response(null, 204);
    }
}