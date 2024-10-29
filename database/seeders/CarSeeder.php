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
            ],
            [
                "name" => "LaFerrari",
                "brand" => "Ferrari",
                "engine" => "6.3L V12 Hybrid",
                "top_speed" => 350,
                "power" => 950,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/1LaNJoP3vkg",
                "weight" => 1585.00,
                "description" => "Hybrid hypercar combining raw power with advanced technology."
            ],
            [
                "name" => "Aventador SVJ",
                "brand" => "Lamborghini",
                "engine" => "6.5L V12",
                "top_speed" => 351,
                "power" => 770,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/nP11TkjxJ8I",
                "weight" => 1525.00,
                "description" => "Aggressive and powerful, pushing performance to the limits."
            ],
            [
                "name" => "Chiron",
                "brand" => "Bugatti",
                "engine" => "8.0L Quad-Turbo W16",
                "top_speed" => 420,
                "power" => 1500,
                "country" => "France",
                "image_url" => "https://unsplash.com/photos/jlDj1LbU0Wk",
                "weight" => 1995.00,
                "description" => "Ultimate performance with luxurious design."
            ],
            [
                "name" => "P1",
                "brand" => "McLaren",
                "engine" => "3.8L Twin-Turbo V8 Hybrid",
                "top_speed" => 350,
                "power" => 903,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/_n9WyALhXuE",
                "weight" => 1490.00,
                "description" => "Hybrid hypercar with extraordinary performance."
            ],
            [
                "name" => "918 Spyder",
                "brand" => "Porsche",
                "engine" => "4.6L V8 Hybrid",
                "top_speed" => 345,
                "power" => 887,
                "country" => "Germany",
                "image_url" => "https://unsplash.com/photos/B5hLzMxEf8A",
                "weight" => 1634.00,
                "description" => "Plug-in hybrid supercar with exceptional efficiency."
            ],
            [
                "name" => "Jesko",
                "brand" => "Koenigsegg",
                "engine" => "5.0L Twin-Turbo V8",
                "top_speed" => 482,
                "power" => 1600,
                "country" => "Sweden",
                "image_url" => "https://unsplash.com/photos/MNlZpT9Yp3Y",
                "weight" => 1420.00,
                "description" => "Built for speed records with lightweight design."
            ],
            [
                "name" => "Huayra",
                "brand" => "Pagani",
                "engine" => "6.0L Twin-Turbo V12",
                "top_speed" => 370,
                "power" => 730,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/ZOoJQXj21jc",
                "weight" => 1350.00,
                "description" => "A blend of beauty, power, and advanced technology."
            ],
            [
                "name" => "Valkyrie",
                "brand" => "Aston Martin",
                "engine" => "6.5L V12 Hybrid",
                "top_speed" => 402,
                "power" => 1160,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/dSl3Ejc5N2s",
                "weight" => 1030.00,
                "description" => "Ultra-light, track-focused hypercar."
            ],
            [
                "name" => "GT",
                "brand" => "Ford",
                "engine" => "3.5L Twin-Turbo V6",
                "top_speed" => 347,
                "power" => 647,
                "country" => "USA",
                "image_url" => "https://unsplash.com/photos/vzX2rgUBQfo",
                "weight" => 1385.00,
                "description" => "Advanced aerodynamics and engineering."
            ],
            [
                "name" => "One",
                "brand" => "Mercedes-AMG",
                "engine" => "1.6L V6 Hybrid",
                "top_speed" => 350,
                "power" => 1000,
                "country" => "Germany",
                "image_url" => "https://unsplash.com/photos/siM2fY5U2Ic",
                "weight" => 1245.00,
                "description" => "F1-derived hybrid hypercar."
            ],
            [
                "name" => "Nevera",
                "brand" => "Rimac",
                "engine" => "Electric Motors",
                "top_speed" => 412,
                "power" => 1914,
                "country" => "Croatia",
                "image_url" => "https://unsplash.com/photos/tLkFvhXIhTc",
                "weight" => 2150.00,
                "description" => "Electric hypercar with groundbreaking technology."
            ],
            [
                "name" => "Evija",
                "brand" => "Lotus",
                "engine" => "Electric Motors",
                "top_speed" => 320,
                "power" => 1972,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/ZG5_KI0R1u8",
                "weight" => 1680.00,
                "description" => "Fully electric hypercar with stunning design."
            ],
            [
                "name" => "Z06",
                "brand" => "Chevrolet",
                "engine" => "5.5L V8",
                "top_speed" => 315,
                "power" => 670,
                "country" => "USA",
                "image_url" => "https://unsplash.com/photos/9K57dXYc3HE",
                "weight" => 1560.00,
                "description" => "Mid-engine layout with track-focused design."
            ],
            [
                "name" => "SF90 Stradale",
                "brand" => "Ferrari",
                "engine" => "4.0L V8 Hybrid",
                "top_speed" => 340,
                "power" => 986,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/K2UotnpnQDk",
                "weight" => 1570.00,
                "description" => "Plug-in hybrid with electric performance."
            ],
            [
                "name" => "Roadster",
                "brand" => "Tesla",
                "engine" => "Electric",
                "top_speed" => 402,
                "power" => 1000,
                "country" => "USA",
                "image_url" => "https://unsplash.com/photos/eD7nFI5yoUw",
                "weight" => 2000.00,
                "description" => "All-electric supercar with impressive range."
            ],
            [
                "name" => "Huracán EVO",
                "brand" => "Lamborghini",
                "engine" => "5.2L V10",
                "top_speed" => 325,
                "power" => 640,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/5Zx8-ZnI8Go",
                "weight" => 1422.00,
                "description" => "Advanced handling and performance."
            ],
            [
                "name" => "GT-R Nismo",
                "brand" => "Nissan",
                "engine" => "3.8L Twin-Turbo V6",
                "top_speed" => 315,
                "power" => 600,
                "country" => "Japan",
                "image_url" => "https://unsplash.com/photos/1kYpKZpF_Xk",
                "weight" => 1760.00,
                "description" => "High-performance, track-oriented design."
            ],
            [
                "name" => "Tuatara",
                "brand" => "SSC",
                "engine" => "5.9L Twin-Turbo V8",
                "top_speed" => 455,
                "power" => 1750,
                "country" => "USA",
                "image_url" => "https://unsplash.com/photos/sRZ4cu2o5EY",
                "weight" => 1247.00,
                "description" => "Aiming for top speed records."
            ],
            [
                "name" => "Venom F5",
                "brand" => "Hennessey",
                "engine" => "6.6L Twin-Turbo V8",
                "top_speed" => 484,
                "power" => 1817,
                "country" => "USA",
                "image_url" => "https://unsplash.com/photos/Ps2n0rShqaE",
                "weight" => 1360.00,
                "description" => "Challenging for the world's fastest car."
            ],
            [
                "name" => "M8 Competition",
                "brand" => "BMW",
                "engine" => "4.4L Twin-Turbo V8",
                "top_speed" => 305,
                "power" => 617,
                "country" => "Germany",
                "image_url" => "https://unsplash.com/photos/AMxxmKctzMo",
                "weight" => 1985.00,
                "description" => "Luxury grand tourer with advanced performance."
            ],
            [
                "name" => "SF90 Spider",
                "brand" => "Ferrari",
                "engine" => "4.0L V8 Hybrid",
                "top_speed" => 340,
                "power" => 986,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/rdC_9eze7bI",
                "weight" => 1570.00,
                "description" => "Ferrari's first plug-in hybrid convertible with immense power and style."
            ],
            [
                "name" => "Senna",
                "brand" => "McLaren",
                "engine" => "4.0L Twin-Turbo V8",
                "top_speed" => 335,
                "power" => 800,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/nt7k7jx6zzI",
                "weight" => 1198.00,
                "description" => "Track-focused hypercar named after legendary driver Ayrton Senna."
            ],
            [
                "name" => "Regera",
                "brand" => "Koenigsegg",
                "engine" => "5.0L V8 Hybrid",
                "top_speed" => 400,
                "power" => 1500,
                "country" => "Sweden",
                "image_url" => "https://unsplash.com/photos/TLbDGrv98U0",
                "weight" => 1590.00,
                "description" => "Advanced hybrid hypercar with over 1500 horsepower and unique design."
            ],
            [
                "name" => "Speedtail",
                "brand" => "McLaren",
                "engine" => "4.0L Twin-Turbo V8 Hybrid",
                "top_speed" => 403,
                "power" => 1035,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/bUgaIaZysH0",
                "weight" => 1430.00,
                "description" => "Ultra-streamlined design, fastest McLaren in a straight line."
            ],
            [
                "name" => "Veyron Super Sport",
                "brand" => "Bugatti",
                "engine" => "8.0L Quad-Turbo W16",
                "top_speed" => 415,
                "power" => 1200,
                "country" => "France",
                "image_url" => "https://unsplash.com/photos/AtbuSgVxIhc",
                "weight" => 1838.00,
                "description" => "Record-breaking hypercar with immense power and luxury."
            ],
            [
                "name" => "Agera RS",
                "brand" => "Koenigsegg",
                "engine" => "5.0L V8 Twin-Turbo",
                "top_speed" => 447,
                "power" => 1341,
                "country" => "Sweden",
                "image_url" => "https://unsplash.com/photos/z8Z0z5ex7B8",
                "weight" => 1395.00,
                "description" => "Once held the title of world’s fastest production car."
            ],
            [
                "name" => "Zonda R",
                "brand" => "Pagani",
                "engine" => "6.0L V12",
                "top_speed" => 350,
                "power" => 740,
                "country" => "Italy",
                "image_url" => "https://unsplash.com/photos/l_bEJs9fhVs",
                "weight" => 1070.00,
                "description" => "Track-only hypercar with stunning design and performance."
            ],
            [
                "name" => "Valhalla",
                "brand" => "Aston Martin",
                "engine" => "4.0L Twin-Turbo V8 Hybrid",
                "top_speed" => 350,
                "power" => 1000,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/2pmyVfu3_NY",
                "weight" => 1350.00,
                "description" => "Hybrid hypercar designed in partnership with Red Bull Racing."
            ],
            [
                "name" => "Jesko Absolut",
                "brand" => "Koenigsegg",
                "engine" => "5.0L Twin-Turbo V8",
                "top_speed" => 482,
                "power" => 1600,
                "country" => "Sweden",
                "image_url" => "https://unsplash.com/photos/yZXm6gLCy1Q",
                "weight" => 1320.00,
                "description" => "Built to reach the highest speed record with advanced engineering."
            ],
            [
                "name" => "Vulcan",
                "brand" => "Aston Martin",
                "engine" => "7.0L V12",
                "top_speed" => 320,
                "power" => 820,
                "country" => "United Kingdom",
                "image_url" => "https://unsplash.com/photos/Q_AzM4LbqhA",
                "weight" => 1350.00,
                "description" => "Track-only hypercar with impressive V12 power and handling."
            ],

        ];
        foreach ($cars as $car) {
            $newCar = Car::create($car);
        }
    }
}
