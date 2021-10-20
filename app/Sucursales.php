<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    public function Vendedores()
    {
        return $this->hasOne('Sucursales\Vendedores');
    }
}
