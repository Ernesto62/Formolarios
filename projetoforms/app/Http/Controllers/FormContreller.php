<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormContreller extends Controller
{
    //
    public function mostrarform(){
    	return view('contactos');
    }
    public function processarForm(Request $request){
    	$nome=$request->nome;
    	$morada=$request->morada;
    	$automovel=$request->automovel;
    	return view('form-enviado',[
    		'nome'=>$nome,
    		'morada'=>$morada,
    		'automovel'=>$automovel
    	]
    );
    }
    public function index(){
    	return view('entrada');
    }
}
