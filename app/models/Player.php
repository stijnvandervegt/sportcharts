<?php

class Player extends Eloquent
{
    protected $table = 'player';

    public function team() {
        return $this->belongsTo('Team');
    }

    public function stats() {
        return $this->hasMany('PlayerStat');
    }

}
