<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'estado'
    ];

    public function Articulo(): BelongsTo
    {
        return $this->belongsTo(Articulo::class);
    }
}
