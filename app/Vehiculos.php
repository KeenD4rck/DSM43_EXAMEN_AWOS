<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    public function Accidentes()
    {
        return $this->hasMany('Vehiculos\Accidentes');
    }
    public function Clientes()
    {
        return $this->hasMany('Vehiculos\Clientes');
    }
    public function Poliza()
    {
        return $this->hasMany('Vehiculos\Poliza');
    }
}
