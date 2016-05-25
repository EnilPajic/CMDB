<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelloController extends Controller
{
	public function hello($id = 'NOBODY')
		{
			return view('hello', array ("id" => $id));
		}
	public function LogujSe (Request $r)
	{
		var_dump ($r);
		echo "<script>alert ('radi');</script>";
		return "<h1>Testiram samo</h1>";
	}
	public function index()
		{

			return 'Ovo je index fajl Autora';
		}
    public function welcome()
    {
        return view('welcome');
    }
    
}
