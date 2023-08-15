<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Testimonial extends Model
{
    use HasFactory;

    protected $table = 'customer_testimonials';

    protected $fillable = [
        'fullname_az',
        'feedback_az',
        'fullname_en',
        'feedback_en',
        'fullname_ru',
        'feedback_ru',
        'image',
        'status'
    ];

    public function getFullnameAttribute()
    {
        $language = app()->getLocale(); // Aktif dil
        return $this->getAttribute("fullname_$language");
    }

    public function getFeedbackAttribute()
    {
        $language = app()->getLocale(); // Aktif dil
        return $this->getAttribute("feedback_$language");
    }
}
