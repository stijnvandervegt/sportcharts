<?php

class Team extends Eloquent
{
    protected $table = 'team';

    public function seasons() {
        return $this->belongsToMany('Season');
    }
}
