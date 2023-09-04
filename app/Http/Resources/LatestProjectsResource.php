<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Resources\Json\JsonResource;

class LatestProjectsResource extends JsonResource
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
            'title' => [
                'en' => $this->getTranslation('title', 'en'),
                'ar' => $this->getTranslation('title', 'ar'),
            ],
            'latest' => $this->getLatestProjectsInAllRegionsOneDepartment(),
        ];
    }

    public function getLatestProjectsInAllRegionsOneDepartment(){
        $allRegions = $this->regions;

        $allProjects = collect([]);
         $allRegions->each(function($region)use ($allProjects){
            $allProjects->push(...ProjectResource::collection(
                Project::where('region_id', $region->id)->get()
            ));

        });
        return $allProjects->sortByDesc('created_at')->values();
    }
}
