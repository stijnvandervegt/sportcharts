<?php

class GameSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        foreach(range(1,10) as $teamId) {

            $teamAwayId = (($teamId == 10) ? 1 : $teamId+1);

            Game::create([
                'season_id'     => 1,
                'team_home_id'  => ($teamId),
                'team_away_id'  => $teamAwayId,
                'date'          => $faker->dateTimeBetween('- 7days', 'now')
            ]);

            foreach(range(1,8) as $index) {

                $strInsertion = (($index == 5) ? 'van' : '');

                $player = Player::create([
                    'team_id'   => $teamId,
                    'firstname' => $faker->firstName,
                    'lastname'  => $faker->lastName,
                    'birthday'  => $faker->date('Y-m-d','-16 years'),
                ]);

                foreach(range(1, 5) as $statTypeId) {

                    $attemptPlayer      = rand(0,20);
                    $successPlayer      = rand(0,$attemptPlayer);
                    $percentagePlayer   = (($attemptPlayer == 0) ? 0 : ((100 / $attemptPlayer) * $successPlayer));

                    PlayerStat::create([
                        'player_id'      => $player->id,
                        'game_id'        => $teamId,
                        'stat_type_id'   => $statTypeId,
                        'attempt'        => $attemptPlayer,
                        'success'        => $successPlayer,
                        'percentage'     => $percentagePlayer
                    ]);

                }

            }

        }

    }

}
