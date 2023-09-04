<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;



class Investor extends Model implements HasMedia
{
    use HasFactory ;
    use InteractsWithMedia;
    use HasTranslations;

    protected $fillable = ['title','content'];
    public $translatable = ['title','content'];
    protected $casts=[
      "created_at"=>'date:Y/m/d'
    ];
}
