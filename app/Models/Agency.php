<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends Model
{
    use HasFactory;

    public function vendedores()
    {
        return $this->hasMany(Vendedor::class);
    }

    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }
}
