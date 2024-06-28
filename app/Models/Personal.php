<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'cargo',
        'estado'
    ];

    public function Articulo(): BelongsTo
    {
        return $this->belongsTo(Articulo::class);
    }
}
