<?php

class StatTypeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        foreach(range(1,5) as $index) {
            StatType::create([
                'name' => $faker->word
            ]);
        }

    }

}
