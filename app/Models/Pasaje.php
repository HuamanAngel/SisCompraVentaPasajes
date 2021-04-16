<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasaje extends Model
{
    use HasFactory;

    protected $table = 'pasajes';
    protected $fillable = [
        'iti_id',
        'pas_numero_asiento',
        'pas_estado_pasaje',
        'pas_costo',
        'pas_fecha_pasaje',
    ];

    protected $casts = [
        'pas_fecha_pasaje' => 'datetime',
    ];

}
