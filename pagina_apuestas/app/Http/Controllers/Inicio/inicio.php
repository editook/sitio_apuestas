<?php

namespace App\Http\Controllers\Inicio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inicio extends Controller
{
    public function home(){
        $consulta2=[['Futbol','Real Madrid', 'Aurora','2 - 1'],
        ['Futbol','Real Madrid', 'Aurora','1 - 1'],
        ['Dota 2','Navi', 'team liquid','0 - 1']
        ,['Lol','Assurance', 'Au - pro','2 - 2'],
        ['Futbol','Boca', 'Aurora','3 - 1']];

        
        $consulta1=[['20 min','Futbol','Real Madrid', 'Aurora'],
        ['34 min','Futbol','Real Madrid', 'Aurora'],
        ['45 min','Dota 2','Navi', 'team liquid']
        ,['1.30 min','Lol','Assurance', 'Au - pro'],
        ['3.50 min','Futbol','Boca', 'Aurora'],
    ['3.51 min','Futbol','Boca', 'Aurora']];
        
        return view('Plantilla_inicio.Base', ['dato' => 'inicio','query1'=>$consulta1,'query'=>$consulta2]);
    }
    
}
