<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    //
    protected $fillable = [
        "nombre",
        "alias",
        "estatura",
        "imagen",
        "especies",
        "genero",
        "edad",
        "vivo",
        "lugarNacimiento",
        "residencia"
    ];

    protected function casts(): array
    {
        return [
            'especies' => 'array',
            'vivo' => 'boolean',
            'estatura' => 'float',
            'edad' => 'integer',
        ];
    }

    public function getEsTitanAttribute(): bool
    {
        $especies = $this->especies ?? [];
        $hasTitanSpecies = is_array($especies) && collect($especies)->contains(fn ($e) => str_contains(strtolower((string)$e), 'titan'));
        $hasTitanAlias = !empty($this->alias) && str_contains(strtolower($this->alias), 'titan');
        return $hasTitanSpecies || $hasTitanAlias || $this->estatura >= 15;
    }
}
