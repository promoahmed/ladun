<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Phase extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    protected $guarded = [];
    protected $fillable = [
        'name',
        'long',
        'lat',
        'project_id',
        'achieve_percentage',
        'is_published' => 'boolean',
    ];

    public $translatable = [
        'name'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function projectUnits(){
        return $this->hasManyThrough(Unit::class,Project::class);
    }

    public function units()
    {
        return $this->hasMany(Unit::class);
    }

}
