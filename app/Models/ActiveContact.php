<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActiveContact extends Model
{
    protected $table = 'contact_socials';
    public $timestamps = false;

    protected $casts = [
        'socials' => 'array'
    ];
}
