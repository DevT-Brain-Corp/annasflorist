<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    protected $table = "pots";

    protected $fillable = [
        'pot_image', 'pot_name'
    ];
}
