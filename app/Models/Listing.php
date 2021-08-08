<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;


    protected $fillable = [
        'estate_type',
        'estate_city',
        'estate_bedrooms',
        'estate_bathrooms',
        'estate_surface',
        'estate_age',
        'estate_title',
        'estate_price',
        'estate_thumbnail',
        'estate_description',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
