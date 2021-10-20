<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    public function Poliza()
    {
        return $this->hasMany('Vendedores\Poliza');
    }
    public function Sucursales()
    {
        return $this->hasMany('Vendedores\Sucursales');
    }
}
