<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable=['nom','prenom','code', 'grade', 'tel', 'mail', 'numB'];
}
