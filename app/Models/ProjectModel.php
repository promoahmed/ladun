<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;


class ProjectModel extends  Model implements HasMedia
{

    use HasFactory ;
    use InteractsWithMedia;
    use HasTranslations;
    protected $fillable = ['title','Land_area','building_area','units_number','floors_number'];
    public $translatable = ['title'];

    // protected $with = ['utilities'];
    public function utilities()
    {
        return $this->belongsToMany(Utility::class, 'project_model_utility')->with('media');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
