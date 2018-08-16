<?php

namespace App\Http\Controllers\Inicio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class inicio extends Controller
{
    public function home(){
        $consulta2=[['1','Real Madrid', 'Aurora','2 - 1'],
        ['2','Real Madrid', 'Aurora','1 - 1'],
        ['45','Navi', 'team liquid','0 - 1']
        ,['22','Assurance', 'Au - pro','2 - 2'],
        ['4','Boca', 'Aurora','3 - 1']];

        
        $consulta1=[['20 min','1','Real Madrid', 'Aurora'],
        ['34 min','2','Real Madrid', 'Aurora'],
        ['45 min','23','Navi', 'team liquid']
        ,['1.30 min','12','Assurance', 'Au - pro'],
        ['3.50 min','22','Boca', 'Aurora'],
    ['3.51 min','5','Boca', 'Aurora']];
        
        return view('Plantilla_inicio.Base', ['dato' => 'inicio','query1'=>$consulta1,'query'=>$consulta2]);
    }
    public function detalle_partida($identificador){
        //panel izquierdo
        $identificador=[['nombre_equipo1'=>"Team Liquid",'porcentaje'=>"30",'ganancia'=>"1.34",
        'ultimas3partidas'=>['Gaming Tree','Legue Admin','Man Master'],'resultado'=>[[1,2],[2,2],[4,1]]],
        ['nombre_equipo2'=>"Epic Gaming",'porcentaje'=>"70",'ganancia'=>"5.34",
        'ultimas3partidas'=>['TrueDefpull','Formass','mast Kill'],'resultado'=>[[2,2],[1,1],[0,1]]]
        ];
        //panel derecho
        $apostantes=[['juan Maria','1200','Team Liquid'],['Jose G','200','Team Liquid'],
                    ['Pedro Masquez','1000','Epic Gaming'],['Davorsin Douglas','134','Epic Gaming'],
                ['Jaime Mendez','2300','Team Liquid'],['Yara Torrico','3400','Epic Gaming']];
        //dd($apostantes[0][2]);
        return view('Detalle.Detalle_partida_directo', ['dato' => 'none','query1'=>$identificador,'query2'=>$apostantes]);
    }
    
}
