<?php

use munkireport\models\MRModel as Eloquent;

class Munki_facts_model extends Eloquent
{
    protected $table = 'munki_facts';

    protected $hidden = ['id', 'serial_number'];

    protected $fillable = [
      'serial_number',
      'fact_key',
      'fact_value',
    ];
}
