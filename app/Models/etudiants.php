<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom', 'prenom', 'naissance','lieu','sexe','diplome','nomtuteur',''
    ];
    public function classe(){
        return $this->belongTo(classe::class);
    }
}
