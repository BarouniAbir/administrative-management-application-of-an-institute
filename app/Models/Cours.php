<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable=['code','description','nbrHeure', 'coeffDiplome', 'coeffExam', 'coeffTD'];
}
