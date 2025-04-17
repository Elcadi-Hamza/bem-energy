<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Serattacher extends Pivot
{
    protected $table = 'serattachers';

    public $incrementing = false;
    protected $primaryKey = ['id_projet', 'id_produit'];

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'id_projet');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}
