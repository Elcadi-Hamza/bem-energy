<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'pw',
        'adresse'
    ];
    // public function projets(): HasMany
    // {
    //     return $this->hasMany(Projet::class, 'id_projet');
    // }

   

    // // 3. Client has one Commentaire
    // public function commetaires_temoignages(): HasMany
    // {
    //     return $this->HasMany(Commentaire::class, 'id_com_tem');
    // }

}
