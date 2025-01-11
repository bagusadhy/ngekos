<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = ['boarding_house_id', 'photo', 'content', 'rating'];

    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }

}
