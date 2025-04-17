<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentaireTemoignage extends Model
{
    protected $primaryKey = 'id_com_tem';
    public $incrementing = true;

    protected $fillable = [
        'contenu',
        'datePublication',
        'etat',
        'id_employee',
        'id_blog',
        'id_client',
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
}