<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_az',
        'text_az',
        'title_en',
        'text_en',
        'title_ru',
        'text_ru',
        'icon',
        'status',
        ];

    public function getTitleAttribute()
    {
        $language = app()->getLocale(); // Aktif dil
        return $this->getAttribute("title_$language");
    }

    public function getTextAttribute()
    {
        $language = app()->getLocale(); // Aktif dil
        return $this->getAttribute("text_$language");
    }
}
