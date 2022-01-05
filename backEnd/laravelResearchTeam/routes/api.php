<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TeamLeadersController;
use App\Http\Controllers\TeamMembersController;
use App\Models\Administrateur;
use App\Models\Personne;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/tasks', TasksController::class);
Route::apiResource('/projects', ProjectsController::class);
Route::apiResource('/teams', TeamsController::class);
Route::apiResource('/teamLeaders', TeamLeadersController::class);
Route::apiResource('/teamMembers', TeamMembersController::class);

Route::get('/test', function (){
    
    // $admin = Administrateur::create(['id_user'=>1

    // ]);

    // $admin->personne()->create([
        
    //     'firstname'=>"moha",'lastname'=>"ali",'mail'=>"mail@gmail.com",'adresse'=>"rabat",'phone'=>"093893973",'image'=>"image.png"

    // ]);



    return Administrateur::find(2);


    




}



);