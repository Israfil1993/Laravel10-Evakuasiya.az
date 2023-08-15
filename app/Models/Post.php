<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_az',
        'description_az',
        'title_en',
        'description_en',
        'title_ru',
        'description_ru',
        'image',
        'status',
    ];


    public function getTitleAttribute()
    {
        $language = app()->getLocale(); // Aktif dil
        return $this->getAttribute("title_$language");
    }

    public function getDescriptionAttribute()
    {
        $language = app()->getLocale(); // Aktif dil
        return $this->getAttribute("description_$language");
    }
}
