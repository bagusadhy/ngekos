<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bonus extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = ['boarding_house_id', 'name', 'description'];


    public function boardingHouse()
    {
        return $this->belongsTo(BoardingHouse::class);
    }
}
