<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens; // Ajout pour l'API authentication si nécessaire

class Client extends Authenticatable 
{
    use HasFactory, Notifiable; // Ajout de HasApiTokens pour Sanctum
    
    /**
     * The guard that should be used for authentication.
     *
     * @var string
     */
    protected $guard = 'client';
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients'; // Explicitement définir la table
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom', 
        'prenom', 
        'email', 
        'password',
        'adresse', 
        'telephone', 
        'image'
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password', 
        'remember_token'
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Utiliser 'hashed' dans Laravel 11
    ];
    
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
    
    /**
     * Get the projects associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projets()
    {
        return $this->hasMany(Projet::class, 'id_client');
    }
    
    /**
     * Get the comments associated with the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires()
    {
        return $this->hasMany(CommentaireTemoignage::class, 'id_client');
    }
    
    /**
     * Get the products purchased by the client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'acheter', 'id_client', 'id_produit');
    }
}