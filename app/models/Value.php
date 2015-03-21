<?php

class Value extends Eloquent {
    
    protected $table = 'values';

    protected $fillable = array('component', 'pin', 'value');

}
