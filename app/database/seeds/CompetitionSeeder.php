<?php

class CompetitionSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        Competition::create([
            'sport_id'  => 1,
            'name'      => $faker->word
        ]);

    }

}
