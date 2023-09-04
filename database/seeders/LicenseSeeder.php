<?php

namespace Database\Seeders;

use App\Models\Brief;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function(){
            $license = new Brief();
            $titleEn = 'License and Agreement';
            $titleAr = 'التراخيص والموافقات';
            $license
                ->setTranslation('title', 'en', $titleEn)
                ->setTranslation('title', 'ar', $titleAr)
                ->setTranslation('content', 'en', 'License and Agreement text')
                ->setTranslation('content', 'ar', 'النص الخاص بالتراخيص والموافقات')
                ->setTranslation('slug', 'en', Str::slug($titleEn, '-'))
                ->setTranslation('slug', 'ar', Str::slug($titleAr, '-'));
    
            $pathToFile= 'image_placeholder.jpg';
            
            if(Storage::disk('public')->exists($pathToFile)){
                $license
                    ->addMediaFromDisk($pathToFile, 'public') //starting method
                    ->withCustomProperties(['mime-type' => 'image/jpeg']) //middle method
                    ->preservingOriginal() //middle method
                    ->toMediaCollection('about'); //finishing method
                    $license->save();
            }
        });
    }
}
