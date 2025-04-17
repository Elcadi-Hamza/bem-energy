<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $primaryKey = 'id_projet';
    public $incrementing = true;

    protected $fillable = [
        'titre',
        'description',
        'etat',
        'dateDebut',
        'dateFin',
        'id_employee',
        'id_client',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'se_rattacher', 'id_projet', 'id_produit');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'appartenir', 'id_projet', 'id_service');
    }
}