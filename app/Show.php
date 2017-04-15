<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    public $timestamps = false;
    
    protected  $fillable = array('nome', 'genero', 'local', 'artista', 'valor', 'publico');
}
