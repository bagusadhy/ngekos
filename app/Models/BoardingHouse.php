<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BoardingHouse extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = ['city_id', 'category_id', 'name', 'thumbnail', 'description', 'price', 'address'];



    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function bonuses()
    {
        return $this->hasMany(Bonus::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
