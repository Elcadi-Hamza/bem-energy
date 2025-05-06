<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id_service';
    public $incrementing = true;

    protected $fillable = [
        'titre',
        'image',
        'description',
        'id_categorie',
        'id_employee',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }

    public function projets()
    {
        return $this->belongsToMany(Projet::class, 'appartenir', 'id_service', 'id_projet');
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }
    public function commentaires()
    {
        return $this->hasMany(CommentaireTemoignage::class, 'id_blog');
    }
}