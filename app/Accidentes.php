<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accidentes extends Model
{
    public function Vehiculos()
    {
        return $this->hasOne('Accidentes\Vehiculos');
    }
}
