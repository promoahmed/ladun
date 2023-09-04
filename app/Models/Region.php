<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Region extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title',
        'content',
        'is_published',
        'department_id'
    ];

    public $translatable = [
        'title'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'departments' => 'array'
    ];

    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }
    public function projects(){
        return $this->hasMany(Project::class, 'region_id');
    }
}
