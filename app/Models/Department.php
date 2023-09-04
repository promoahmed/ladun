<?php

namespace App\Models;

use App\Http\Resources\ProjectResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Department extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    protected $guarded = [];
    protected $fillable = [
        'title',
        'content',
        'is_published',
    ];

    public $translatable = [
        'title'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        // 'projects' => 'array'
    ];

    public function regions(){
        return $this->hasMany(Region::class)->with('projects');
    }

    // public function projects(){
    //     return $this->hasMany(Project::class);
    // }
}
