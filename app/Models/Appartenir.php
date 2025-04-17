<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Appartenir extends Pivot
{
    protected $table = 'appartenirs';

    public $incrementing = false;
    protected $primaryKey = ['id_projet', 'id_service'];

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'id_projet');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
}