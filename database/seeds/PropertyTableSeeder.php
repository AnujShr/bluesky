<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\PropertyDetail::truncate();
        \App\Property::truncate();
        $faker = Faker\Factory::create();
        $price = $faker->numberBetween(1, 10);
        foreach (range(0, 3) as $N):
            $id = \App\Property::query()->forceCreate([
                'status' => 1,
                'lat' => $faker->latitude,
                'lng' => $faker->longitude,
                'country' => $faker->country,
                'location' => $faker->address,
                'price' => $price,
                'currency' => $faker->currencyCode,
                'features' => json_encode($faker->numberBetween(1, 10))
            ])->id;
            $title = $faker->sentence;
            $arr = ['usd', 'eur'];

            \App\PropertyDetail::query()->forceCreate([
                'property_id' => $id,
                'slug' => str_slug($title),
                'title' => $title,
                'address' => $faker->address,
                'price_min' => $price,
                'description' => $faker->text(150),
                'type' => $arr[0]

            ]);


            if ($N == 1 || $N == 2)
                \App\PropertyDetail::query()->forceCreate([
                    'property_id' => $id,
                    'slug' => str_slug($title),
                    'title' => $title,
                    'address' => $faker->address,
                    'type' => 'reduced_usd',
                    'price_min' => $price - 1,
                    'description' => $faker->text(150)
                ]);
            $price = $price + 1;
        endforeach;
    }
}
