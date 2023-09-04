<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class MediaCenterResource extends JsonResource
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
            'content'=>[
                'en' => $this->getTranslation('content', 'en'),
                'ar' => $this->getTranslation('content', 'ar'),
            ],
            'created_at'=>Carbon::parse($this->created_at)->format('d/m/Y'),
            'id'=>$this->id,
            'media'=>$this->media[0],
            'title'=>[
                'en' => $this->getTranslation('title', 'en'),
                'ar' => $this->getTranslation('title', 'ar'),
            ]
        ];
    }
}
