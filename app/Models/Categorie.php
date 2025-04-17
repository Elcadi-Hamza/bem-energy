<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $primaryKey = 'id_categorie';
    public $incrementing = true;
    protected $fillable = [
        'libelle',
        'id_employee',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_categorie');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'id_categorie');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'id_categorie');
    }
}