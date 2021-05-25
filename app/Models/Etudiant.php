<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable=['nom','prenom','adresse', 'mail', 'tel', 'login', 'mdp'];
}
