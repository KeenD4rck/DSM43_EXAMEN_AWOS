<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliza extends Model
{
    public function Vehiculos()
    {
        return $this->hasMany('Poliza\Vehiculos');
    }
    public function Vendedores()
    {
        return $this->hasMany('Poliza\Vendedores');
    }
}
