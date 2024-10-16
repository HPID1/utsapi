<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'level';
    
    protected $fillable = [
        'level_name',
        'number_of_enemies',
        'heal-point',
        'times',

    ];
}
