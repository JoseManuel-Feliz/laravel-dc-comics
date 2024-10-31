<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $filePath = resource_path('csv-files/car_data.csv');

        $file = fopen($filePath, 'r');

        $tableColumns = fgetcsv($file);
        /* dd($tableColumns); */
        while (($row = fgetcsv($file)) !== false) {

            $carData = [
                'make' => $row[array_search('Make', $tableColumns)],
                'model' => $row[array_search('Model', $tableColumns)],
                'year' => $row[array_search('Year', $tableColumns)],

            ];

            $carData = Car::create($carData);

            var_dump($carData);
        }



        fclose($file);
    }
}
