<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'Etudiant';
    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = ['nom', 'prenom', 'dtn', 'prix', 'classe'];
}
