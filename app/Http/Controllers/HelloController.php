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
	public function index()
		{
			//Index fajl za prikaz knjiga
			return 'Ovo je index fajl Autora';
		}
    
}
