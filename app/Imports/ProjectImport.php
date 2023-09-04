<?php

namespace App\Imports;

use App\Models\Location;
use App\Models\Project;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class ProjectImport implements ToCollection
{


    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */


    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $project = Project::create([
                'name' => [
                    'en' => $row[3]
                ],
                'content' => [
                    'en' => $row[4]
                ],
            ]);

            $project->location()->create([
                'city'=>'default',
                'address'=>'default',
                'Latitude'=>$row[1],
                'Longitude'=>$row[2]
            ]);

        }
    }
}
