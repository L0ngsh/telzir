<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $filable = [
        'name',
        'ddd_id',
        'state_id'
    ];
}
