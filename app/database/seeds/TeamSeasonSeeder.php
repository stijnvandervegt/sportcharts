<?php

class TeamSeasonSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach(range(1,10) as $index) {
            TeamSeason::create([
                'team_id'   => $index,
                'season_id' => 1
            ]);
        }

    }

}
