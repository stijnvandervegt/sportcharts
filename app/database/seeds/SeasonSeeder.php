<?php

class SeasonSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker  = Faker\Factory::create();

        Season::create([
            'competition_id'    => 1,
            'name'              => $faker->year
        ]);

    }

}