<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;



class PaginasController extends Controller
{
    public function nosotros(){

    	$nombre='Mauricio';
    	return view('nosotros')->with ([
    		'nombre'=>'Mauricio zapallo',
    		'empresa'=>'kyf seguridad integral'
    		]);
    }

    public function contacto(){

    	return view('contacto');
    }
}
