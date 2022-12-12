<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class encaisser extends Model
{
    use HasFactory;
    protected $fillable =[
        'datedebut', 'datefin', 'heureEncaisse'
    ];
    public function etudiants(){
        return $this->belongTo(etudiants::class);
    }
    public function cassier(){
        return $this->belongTo(cassier::class);
    }
}
