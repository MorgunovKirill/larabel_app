<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    //

    public $incrementing = false;

    protected $fillable = [
        'name',
        'price',
        'active',
        'sort'
    ];

    protected $hidden = [
        'price'
    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'sort' => 'integer',
        'secret' => 'encrypted',
    ];
}
