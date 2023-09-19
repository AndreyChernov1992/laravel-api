<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Racer;
use App\Services\ArrayParse;
use App\Services\GetRacersListFacade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $finalTime = new GetRacersListFacade;
        $racer = new Racer;
        $arrayParser = new ArrayParse;
        $resourcesPath = public_path();
        $sortOrder = "asc";
        $racerName = $arrayParser->getArray("$resourcesPath/abbreviations.txt");
        $result = $finalTime->getList($resourcesPath, $sortOrder);
        
        $racer->create();

        foreach ($result as $key => $value) {
                $racer = new Racer;
                $racer->short = $key;
                $racer->time = $value; 
                $racer->name = $racerName[$key];
                $racer->save();
        }
    }
}
