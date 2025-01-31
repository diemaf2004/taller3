<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    public function cliente()
    {
        return $this->hasMany(cliente::class);
    }
    public function colaborador_proyecto()
    {
        return $this->belongsToMany(tipo_pago::class);
    }
}
