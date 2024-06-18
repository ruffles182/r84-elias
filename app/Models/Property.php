<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);
    }

    public function agencia()
    {
        return $this->belongsTo(Agencia::class);
    }
    public function getDaysFromCreatedAttribute()
    {
        return intval((now()->diffInDays($this->date_listed)) * -1);
    }
}
