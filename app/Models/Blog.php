<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'id_blog';
    public $incrementing = true;

    protected $fillable = [
        'titre',
        'image',
        'contenu',
        'datePublication',
        'id_employee',
        'id_categorie',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }

    public function commentaires()
    {
        return $this->hasMany(CommentaireTemoignage::class, 'id_blog');
    }
}