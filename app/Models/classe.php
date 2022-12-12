<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomCl','fraisInscription','mensualite','fraistenue','fraisamicale'
    ];
    public function etudiants(){
        return $this->hasMany(etudiants::class); 
    }
}
