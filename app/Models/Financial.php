<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Financial extends  Model implements HasMedia
{
    use HasFactory ;
    use InteractsWithMedia;
    use HasTranslations;
    protected $guarded = [];
    public $translatable = ['title'];
}
