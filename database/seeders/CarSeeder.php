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

                /* | FUNCTIONS TO SEARCH THE ARRAY FOR VALUES IN EACH COLUMN */

                /* |  */
                'make' => $row[array_search('Make', $tableColumns)],
                'model' => $row[array_search('Model', $tableColumns)],
                'year' => $row[array_search('Year', $tableColumns)],

                /* | */
                'engine_fuel_type' => $row[array_search('Engine Fuel Type', $tableColumns)],
                'engine_hp' => $row[array_search('Engine HP', $tableColumns)],
                'engine_cylinders' => $row[array_search('Engine Cylinders', $tableColumns)],

                /* | */
                'transmission_type' => $row[array_search('Transmission Type', $tableColumns)],
                'driven_wheels' => $row[array_search('Driven_Wheels', $tableColumns)],
                'number_of_doors' => $row[array_search('Number of Doors', $tableColumns)],

                /* | */
                'market_category' => $row[array_search('Market Category', $tableColumns)],
                'vehicle_size' => $row[array_search('Vehicle Size', $tableColumns)],
                'vehicle_style' => $row[array_search('Vehicle Style', $tableColumns)],

                /* | */
                'highway_mpg' => $row[array_search('highway MPG', $tableColumns)],
                'city_mpg' => $row[array_search('city mpg', $tableColumns)],
                'popularity' => $row[array_search('Popularity', $tableColumns)],

                /* | */
                'msrp' => $row[array_search('MSRP', $tableColumns)],
                'description' => $row[array_search('description', $tableColumns)],
                'image_url' => $row[array_search('image_url', $tableColumns)],

            ];

            $carData = Car::create($carData);

            /* dd($carData); */
        }



        fclose($file);
    }
}
