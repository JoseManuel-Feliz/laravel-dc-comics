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

        $cars = [
            [
                "name" => "Lamborghini Sian FKP 37",
                "brand" => "Lamborghini",
                "engine" => "6.5L V12 Hybrid",
                "top_speed" => 350,
                "power" => 819,
                "country" => "Italy",
                "image_url" => "https://cdn.motor1.com/images/mgl/MZp7Y/s1/lamborghini-sian-fkp-37.jpg",
                "weight" => 1620.00,
                "description" => "La prima supercar ibrida di Lamborghini, dotata di tecnologie innovative per prestazioni incredibili."
            ],
            [
                "name" => "Ferrari LaFerrari",
                "brand" => "Ferrari",
                "engine" => "6.3L V12 + Electric Motor",
                "top_speed" => 350,
                "power" => 950,
                "country" => "Italy",
                "image_url" => "https://cdn.motor1.com/images/mgl/1JvZ9/s1/ferrari-laferrari.jpg",
                "weight" => 1585.00,
                "description" => "Una hypercar ibrida della Ferrari che combina potenza grezza con tecnologia avanzata."
            ],
            [
                "name" => "Bugatti Chiron",
                "brand" => "Bugatti",
                "engine" => "8.0L Quad-Turbo W16",
                "top_speed" => 420,
                "power" => 1500,
                "country" => "France",
                "image_url" => "https://cdn.motor1.com/images/mgl/0ANrb/s1/bugatti-chiron.jpg",
                "weight" => 1995.00,
                "description" => "La bestia delle prestazioni finali con velocità straordinaria e un design lussuoso."
            ],
            [
                "name" => "McLaren P1",
                "brand" => "McLaren",
                "engine" => "3.8L Twin-Turbo V8 + Electric Motor",
                "top_speed" => 350,
                "power" => 903,
                "country" => "United Kingdom",
                "image_url" => "https://cdn.motor1.com/images/mgl/6eJwZ/s1/mclaren-p1.jpg",
                "weight" => 1490.00,
                "description" => "Una hypercar ibrida con tecnologia all'avanguardia e prestazioni straordinarie."
            ],
            [
                "name" => "Porsche 918 Spyder",
                "brand" => "Porsche",
                "engine" => "4.6L V8 + Electric Motor",
                "top_speed" => 345,
                "power" => 887,
                "country" => "Germany",
                "image_url" => "https://cdn.motor1.com/images/mgl/JrMvJ/s1/porsche-918-spyder.jpg",
                "weight" => 1634.00,
                "description" => "Una supercar plug-in hybrid della Porsche con prestazioni ed efficienza eccezionali."
            ],
            [
                "name" => "Koenigsegg Jesko",
                "brand" => "Koenigsegg",
                "engine" => "5.0L Twin-Turbo V8",
                "top_speed" => 482,
                "power" => 1600,
                "country" => "Sweden",
                "image_url" => "https://cdn.motor1.com/images/mgl/vmPjB/s1/koenigsegg-jesko.jpg",
                "weight" => 1420.00,
                "description" => "Una hypercar progettata per battere record di velocità con ingegneria avanzata e un design leggero."
            ],
            [
                "name" => "Pagani Huayra",
                "brand" => "Pagani",
                "engine" => "6.0L Twin-Turbo V12",
                "top_speed" => 370,
                "power" => 730,
                "country" => "Italy",
                "image_url" => "https://cdn.motor1.com/images/mgl/Y9Rb9/s1/pagani-huayra.jpg",
                "weight" => 1350.00,
                "description" => "Un'opera d'arte automobilistica che fonde bellezza, potenza e tecnologia all'avanguardia."
            ],
            [
                "name" => "Aston Martin Valkyrie",
                "brand" => "Aston Martin",
                "engine" => "6.5L V12 + Electric Motor",
                "top_speed" => 402,
                "power" => 1160,
                "country" => "United Kingdom",
                "image_url" => "https://cdn.motor1.com/images/mgl/Q1Pv6/s1/aston-martin-valkyrie.jpg",
                "weight" => 1030.00,
                "description" => "Una hypercar ultra-leggera, focalizzata sulla pista, creata in collaborazione con Red Bull Racing."
            ],
            [
                "name" => "Ford GT",
                "brand" => "Ford",
                "engine" => "3.5L Twin-Turbo V6",
                "top_speed" => 347,
                "power" => 647,
                "country" => "USA",
                "image_url" => "https://cdn.motor1.com/images/mgl/vkXB9/s1/ford-gt.jpg",
                "weight" => 1385.00,
                "description" => "Una rinascita moderna dell'iconica supercar GT di Ford, con aerodinamica avanzata e ingegneria all'avanguardia."
            ],
            [
                "name" => "Mercedes-AMG One",
                "brand" => "Mercedes-AMG",
                "engine" => "1.6L V6 Hybrid",
                "top_speed" => 350,
                "power" => 1000,
                "country" => "Germany",
                "image_url" => "https://cdn.motor1.com/images/mgl/BzQwB/s1/mercedes-amg-one.jpg",
                "weight" => 1245.00,
                "description" => "Una hypercar ibrida derivata dalla F1 con ingegneria straordinaria e prestazioni da pista."
            ]
        ];
        foreach ($cars as $car) {
            $newCar = Car::create($car);
        }
    }
}
