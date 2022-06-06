<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'city', 'birthDate', 'logo', 'shirt', 'trainer', 'stadium', 'modules'
    ];
}
