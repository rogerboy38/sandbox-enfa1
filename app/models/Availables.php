<?php

class Availables extends Eloquent {

    protected $table = 'availables';

    public function availables()
    {
        return $this->hasOne('Availables', 'id');
    }


}
