<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
     public function __construct()
    {
    	$this->middleware('auth');    
    } 

    public function index()
    {
      $partidas = \App\Models\Partidas::all();
    //return view('prices.create', compact('id', 'items'));
      return view('home', compact('partidas'));
    }

    public function tablero()
    {
      return view('game/index');
    }


    public function create()
    {
      return view('song/agregar');
    }

    public function store()
    {     
      $estado = 'true';
      \App\Models\Partidas::create(array('activo' => $estado));
      return redirect('home');
    }

    public function unirse()
    {     
      var_dump($_POST['partida_id']);
      //$estado = 'true';
     // \App\Models\Partidas::create(array('activo' => $estado));
      //return redirect('home');
      //echo $data;
    }

}