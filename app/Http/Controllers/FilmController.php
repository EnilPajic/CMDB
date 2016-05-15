<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require __DIR__ . '\..\..\Film.php';
use App\Http\Requests;

class FilmController extends Controller
{
	public function DajFilm($id = -1)
		{
			if ($id === -1)
				return "{\"status\":\"NotOK\", \"message\":\"Nije proslijeđen ID\"}";
			$film = \App\Film::find($id);
			if ($film == null)
				return "{\"status\":\"NotOK\", \"message\":\"Nema filma sa tim IDom\"}";
			return "{\"status\":\"OK\",\n\"Data\":" . json_encode ($film) . "}";
		}
    public function PostaviFilm($id = -1)
    {
        if ($id === -1)
            return "{\"status\":\"NotOK\", \"message\":\"Nije proslijeđen ID\"}";
        $film = new \App\Film();
        $film->naziv="IRFAAAAAAAAAAAAAN";
        $film->broj_pracenja=123;
        $film->ocjena_filma=0;
        $film->Vrsta_filma="NE RADI, LARAVEL, glupi laravel, najgluplji laraveliiiii";
        $film->Zanr_filma="konjski laravel";
        $film->slika="neka slika na logo glupog laravela";
        $film->ListaID=1;
        $film->save();
        return "{\"status\":\"OK\",\n\"Data\":" .".....OKI,,,,, DODAN". "}";
    }
	public function DajSveFilmove()
	{
		$film = \App\Film::all();
		if ($film == null)
			return "{\"status\":\"NotOK\", \"message\":\"Nema filma sa tim IDom\"}";
		return "{\"status\":\"OK\",\n\"Data\":" . json_encode ($film) . "}";
	}
	public function DajFilmByOcjena($ocjena = 10)
	{
		$film = \App\Film::where('ocjena_filma', 'LIKE', "%{$ocjena}%")->get();
		if ($film == null || count ($film) == 0)
			return "{\"status\":\"NotOK\", \"message\":\"Nema filma sa tim kriterijem\"}";
		return "{\"status\":\"OK\",\n\"Data\":" . json_encode ($film) . "}";
	}

	public function DajFilmByZanr($zanr = '')
	{
		$film = \App\Film::where('Zanr_filma', 'LIKE', "%{$zanr}%")->get();
		if ($film == null || count ($film) == 0)
			return "{\"status\":\"NotOK\", \"message\":\"Nema filma sa tim kriterijem\"}";
		return "{\"status\":\"OK\",\n\"Data\":" . json_encode ($film) . "}";
	}
	public function DajFilmByVrsta($vrsta = '')
	{
		$film = \App\Film::where('Vrsta_filma', 'LIKE', "%{$vrsta}%")->get();
		if ($film == null || count ($film) == 0)
			return "{\"status\":\"NotOK\", \"message\":\"Nema filma sa tim kriterijem\"}";
		return "{\"status\":\"OK\",\n\"Data\":" . json_encode ($film) . "}";
	}
	public function IzbrisiFilm ($id)
	{
		$film = \App\Film::find($id);
		if ($film == null)
			return "{\"status\":\"NotOK\", \"message\":\"Nema filma sa tim IDom\"}";
		var_dump ($film);
		var_dump($film->delete());
		return "{\"status\":\"OK\"}";
	}
	public function DodajFilm (Request $film)
	{
/*		$film = new \App\Film();
		$film->naziv = 'Irfan';
		$film->ListaID = 1;
		$film->save();*/
		var_dump($film);
		return "{\"status\":\"OK\"}";
	}
    
}
