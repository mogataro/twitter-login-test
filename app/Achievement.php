<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'runner_id', 'race_count', 'rank1_count', 'rank2_count', 'rank3_count', 'rank4_count', 'rank5_count', 'win_rate'
    ];
}
