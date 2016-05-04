<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";
    public $timestamps = false;
    protected $fillable = [
        'naziv', 'broj_pracenja', 'ocjena_filma','Vrsta_filma','Zanr_filma','Slika','ListaID'
    ];
	//
}
