<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;


    protected $table = 'compras';
    protected $fillable = [
        'use_id',
        'pas_id',
        'com_monto_compra',
        'com_fecha_compra',
    ];

    protected $casts = [
        'com_fecha_compra' => 'datetime',
    ];

    public function compraPasaje(){
        return $this->belongsTo(Pasaje::class,'pas_id');
    }
    public function compraUser(){
        return $this->belongsTo(User::class,'use_id');
    }
}
