<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Itinerario extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'itinerarios';
    protected $fillable = [
        'iti_price',
        'iti_salida',
        'iti_isAvailable',
        'iti_quantitySeat',
        'iti_service',
    ];

    protected $casts = [
        'iti_salida' => 'datetime',
    ];

}
