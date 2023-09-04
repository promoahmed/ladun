<?php

namespace Database\Seeders;

use App\Models\Brief;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Settings;

class BriefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $brief = new Brief();
        $brief->setTranslation('title', 'en', 'About Us')
            ->setTranslation('content', 'en', 'About Us Content')
            ->setTranslation('title', 'ar', 'اعرف عنا ')
            ->setTranslation('content', 'ar', 'محتوي اعرف اعنا ');
        $brief->save();


        $brief = new Brief();
        $brief->setTranslation('title', 'en', 'Who Are We')
            ->setTranslation('content', 'en', 'Who Are We Content')
            ->setTranslation('title', 'ar', 'من نحن ')
            ->setTranslation('content', 'ar', 'من نحن محتوي');
        $brief->save();




    }
}
