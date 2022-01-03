<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

        'id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'projectCost' => $this->projectCost,
        'projectDomain' => $this->projectDomain,
        'status' => $this->status,
        'startDate' => $this->startDate,
        'endDate' => $this->endDate,
        'team_id' => $this->team_id,
           
        ];
    }
}