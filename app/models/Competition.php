<?php

class Competition extends Eloquent
{
    protected $table = 'competition';

    public function sport() {
        return $this->belongsTo('Sport');
    }

    public function seasons() {
        return $this->hasMany('Season');
    }

}
