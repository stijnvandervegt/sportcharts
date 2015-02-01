<?php

class Game extends Eloquent
{
    protected $table = 'game';

    public function homeGame() {
        return $this->hasOne('Team', 'team_home_id');
    }

    public function awayGame() {
        return $this->hasOne('Team', 'team_away_id');
    }

    public function stats() {
        return $this->hasMany('PlayerStat');
    }

}
