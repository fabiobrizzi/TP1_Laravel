<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    //Toujours ajouter les fillable pour create delete et update les colonne de la DB Ville
    protected $fillable = ['nom'];


}
