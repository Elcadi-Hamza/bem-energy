<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentaireTemoignage extends Model
{
    protected $primaryKey = 'id_comtem';
    public $incrementing = true;

    protected $fillable = [
        'contenu',
        'datePublication',
        'etat',
        'id_employee',
        'id_blog',
        'id_client',
        'id_service',
        'id_produit',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_employee');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'id_blog');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'id_service');
    }
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
}