<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Project extends  Model implements HasMedia
{
    use HasFactory ;
    use InteractsWithMedia;
    use HasTranslations;
    protected $fillable =
    [
        'name',
        'slug',
        'phone',
        'email',
        'address',
        'attachment',
        'content',
        'is_published',
        'Land_area',
        'building_area',
        'units_number',
        'models_number',
        // 'department_id',
        'region_id',
        'downloads_text',


        'facilities',
        'commercial',
        'investment',
        'government',
        'educational',
        'trade',
        'gardens',
        'mosque',
        'project_video',
        'video',


    ];
    public $translatable = ['name','slug','address','content','Land_area', 'downloads_text'];
    protected $casts = [
        'is_published' => 'boolean',
        'attachment' => 'array',
        // 'tags' => 'array',
        // 'departments' => 'array',
        // 'regions' => 'array'
    ];

    public function utilities()
    {
        return $this->belongsToMany(Utility::class, 'project_utility');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class);
    }
    public function project_models()
    {
        return $this->hasMany(ProjectModel::class);
    }
    public function projectModelsWithUtilities()
    {
        return $this->hasMany(ProjectModel::class)->with('utilities','media');
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    // public function department()
    // {
    //     return $this->belongsTo(Department::class, 'department_id');
    // }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function phases()
    {
        return $this->hasMany(Phase::class);
    }
    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
