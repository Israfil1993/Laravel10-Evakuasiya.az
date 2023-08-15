<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key_az',
        'value_az',
        'key_en',
        'value_en',
        'key_ru',
        'value_ru',
        'image',
        'status',
    ];
}
