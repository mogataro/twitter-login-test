<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaceResult extends Model
{
    protected $fillable = [
        'rank1', 'rank2', 'rank3', 'rank4', 'rank5'
    ];
}
