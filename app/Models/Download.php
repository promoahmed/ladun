<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Download extends  Model implements HasMedia
{
    use HasFactory ;
    use InteractsWithMedia;
    use HasTranslations;

    protected $fillable = ['name','project_attachment'];
    public $translatable = ['name'];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
