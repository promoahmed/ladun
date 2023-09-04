<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'mainImage' => [
                'src' => $this->getMedia('department')->first()->original_url,
                'alt' => $this->getMedia('department')->first()->file_name,
            ],
            'title' => [
                'en' => $this->getTranslation('title', 'en'),
                'ar' => $this->getTranslation('title', 'ar'),
            ],
            'regions' => $this->regions->map(function($region){
                return [
                    'id' => $region->id,
                    'title' => [
                        'en' => $region->getTranslation('title', 'en'),
                        'ar' => $region->getTranslation('title', 'ar'),
                    ],
                    'projects' => ProjectResource::collection(Project::where('region_id', $region->id)->get()),
                ];
            }),
        ];
    }
}
