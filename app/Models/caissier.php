<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caissier extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomCaissier', 'prenomCaissier','niveau'
    ];
    public function encaisser(){
        return $this->hasMany(encaisser::class);
    }
}
