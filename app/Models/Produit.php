<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $primaryKey = 'id_produit';
    public $incrementing = true;

    protected $fillable = [
        'nom',
        'description',
        'stock',
        'prix',
        'image',
        'quantite',
        'id_employee',
        'id_categorie',
    ];

    protected $casts = [
        'stock' => 'boolean',
        'prix' => 'decimal:2',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }

    public function projets()
    {
        return $this->belongsToMany(Projet::class, 'se_rattacher', 'id_produit', 'id_projet');
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class,'acheter','id_client','id_produit');
    }
}