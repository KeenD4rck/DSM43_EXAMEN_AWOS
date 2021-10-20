<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public function Vehiculos()
    {
        return $this->hasOne('Clientes\Vehiculos');
    }
}
