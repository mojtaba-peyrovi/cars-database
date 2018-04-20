<?php

use Faker\Generator as Faker;
use Yomo\AddressFactory\Facades\RealAddress;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'price' => $faker->numberBetween($min=500000, $max = 5000000),
        'status' => $faker->randomElement($array = ['used','new']),
        'year' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now'),
        'make' => $faker->randomElement(['Toyota','Nissan','Mercedes-Benz']),
        'model' =>$faker->randomElement(['Camry','SL-200','Teana']),
        'trim' => $faker->word,
        'bodyType' => $faker->randomElement(['Sedan','Pickup','Van']),
        'gear' => $faker->randomElement(['Manual','Automatic']),
        'engine' => $faker->randomElement(['1.2 cc','1.5 cc','2.0 cc','2.2 cc','3.0 cc'] ),
        'fuel' => $faker->randomElement(['Petrol','CNG','Dual']),
        'mileage' => $faker->numberBetween($min=1000, $max = 500000),
        'desc' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'features' =>$faker->sentence($nbWords = 20, $variableNbWords = true),
        'color' => $faker->hexcolor,
        'driveType' => $faker->randomElement(['2WD','4WD','AWD']),
        'doors' => $faker->randomElement(['3','4','5']),
        'imgUrl' => $faker->imageUrl($width = 640, $height = 480)

    ];
});
