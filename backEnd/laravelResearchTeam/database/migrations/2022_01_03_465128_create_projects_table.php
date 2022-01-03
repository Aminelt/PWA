<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('description');
            $table->String('projectCost');
            $table->String('projectDomain');
            $table->String('status');
            $table->dateTime('startDate', $precision = 0);
            $table->dateTime('endDate', $precision = 0);
            $table->foreignId('team_id')->constrained('teams')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}