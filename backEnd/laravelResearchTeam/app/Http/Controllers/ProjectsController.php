<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProjectsResource;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;





class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
         return ProjectsResource::collection(Project::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(ProjectRequest $request)
    {

        $project = Project::create([
                      
            'name' =>  $request->input('name'),
            'description' =>  $request->input('description'),
            'projectCost' =>  $request->input('projectCost'),
            'projectDomain' =>  $request->input('projectDomain'),
            'status' =>  $request->input('status'),
            'startDate' =>  $request->input('endDate'),
            'endDate' =>  $request->input('endDate'),
            'team_id' =>  $request->input('team_id'),
        ]);

        return new ProjectsResource($project);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
         return new ProjectsResource($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update([
            'name' =>  $request->input('name'),
            'description' =>  $request->input('description'),
            'projectCost' =>  $request->input('projectCost'),
            'projectDomain' =>  $request->input('projectDomain'),
            'status' =>  $request->input('status'),
            'startDate' =>  $request->input('endDate'),
            'endDate' =>  $request->input('endDate'),
            'team_id' =>  $request->input('team_id'),          
        ]);

        return new ProjectsResource($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
         $project->delete();
         return response(null, 204);
    }
}