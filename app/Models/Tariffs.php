<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tariffs extends Model
{
    protected $table = 'tariffs';
    protected $filable = [
        'origin_ddd_id',
        'destination_ddd_id',
        'price'
    ];
}
