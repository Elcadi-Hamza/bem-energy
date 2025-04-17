<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'client';

    protected $fillable = [
        'nom', 'prenom', 'email', 'password',
        'adresse', 'telephone', 'image'
    ];

    protected $hidden = ['password', 'remember_token'];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function projets()
    {
        return $this->hasMany(Projet::class, 'id_client');
    }

    public function commentaires()
    {
        return $this->hasMany(CommentaireTemoignage::class, 'id_client');
    }
    public function produits()
    {
        return $this->belongsToMany(Produit::class,'acheter','id_client','id_produit');
    }

}
