<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Location extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $guarded = [];

    public $translatable =['address','city'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
