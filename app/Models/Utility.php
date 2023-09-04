<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Utility extends Model  implements HasMedia
{
    use HasFactory ;
    use InteractsWithMedia;
    use HasTranslations;
    protected $fillable = ['title'];
    public $translatable = ['title'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_utility');
    }
    public function project_models()
    {
        return $this->belongsToMany(ProjectModel::class, 'project_model_utility');
    }

}
