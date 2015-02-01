<?php

class SportSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker  = Faker\Factory::create();

        Sport::create([
            'name' => $faker->word
        ]);

    }

}
