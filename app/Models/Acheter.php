<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Acheter extends Pivot
{
    protected $table = 'acheters';

    public $incrementing = false;
    protected $primaryKey = ['id_client', 'id_produit'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}
