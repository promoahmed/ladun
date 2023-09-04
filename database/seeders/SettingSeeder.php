<?php

namespace Database\Seeders;

use App\Models\setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpOffice\PhpSpreadsheet\Settings;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        setting::create([
            'fax'=>'4888567 - 011',
            'phone'=>'920011560',
            'email'=>'r.alkathami@ladun.sa',
            'convert'=>'1555',
            'experience'=>'50',
            'project'=>'16',
            'companies'=>'11',
            'developed_buildings'=>'250',
            'developing_buildings'=>'19673',
        ]);
    }
}
