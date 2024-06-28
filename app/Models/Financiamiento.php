<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financiamiento extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'estado'
    ];

    public function Articulo(): BelongsTo
    {
        return $this->belongsTo(Articulo::class);
    }
}
