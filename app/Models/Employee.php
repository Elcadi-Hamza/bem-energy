<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'employee';

    protected $fillable = [
        'nom', 'prenom', 'email', 'password',
        'telephone', 'role', 'image'
    ];

    protected $hidden = ['password', 'remember_token'];
    
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function categories()
    {
        return $this->hasMany(Categorie::class, 'id_employee');
    }

    public function projets()
    {
        return $this->hasMany(Projet::class, 'id_employee');
    }

    public function produits()
    {
        return $this->hasMany(Produit::class, 'id_employee');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'id_employee');
    }

    public function commentaires()
    {
        return $this->hasMany(CommentaireTemoignage::class, 'id_employee');
    }
    public function services()
    {
        return $this->hasMany(Service::class, 'id_employee');
    }

    
}