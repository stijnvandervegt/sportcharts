<?php

class Season extends Eloquent
{
    protected $table = 'season';

    public function competition() {
        return $this->belongsTo('Competition');
    }

    public function teams() {
        return $this->belongsToMany('Team');
    }
}
