<?php

class Sport extends Eloquent
{
    protected $table = 'sport';

    public function competitions() {
        return $this->hasMany('Competition');
    }
}
