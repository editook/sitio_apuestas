<?php

namespace App\Http\Controllers\Inicio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inicio extends Controller
{
    public function home(){
        return view('Plantilla_inicio.Base', ['dato' => 'inicio']);
    }
    
}
