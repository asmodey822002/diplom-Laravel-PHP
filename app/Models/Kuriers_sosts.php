<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuriers_sosts extends Model
{
    public function hasZakaz()
    {
    return $this->belongsTo('App\Models\Zakaz_kuriers', 'id', 'zakaz_kuriers_id');
    }
}
