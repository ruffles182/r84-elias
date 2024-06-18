<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Vendor extends Model
{
    use HasFactory;

    public function agencia()
    {
        return $this->belongsTo(Agencia::class);
    }

    public function propiedades()
    {
        return $this->hasMany(Propiedad::class);
    }
}
