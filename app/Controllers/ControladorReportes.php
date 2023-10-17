<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModeloReportes;

class ControladorReportes extends Controller
{
    //funcion que importa css y js
    public function index(){
        $this->load->helper('url');
        $this->load->view('test');
    }
    //FUNCION PARA VER LOS LIBROS
    public function generarLibro(){

        $objRepor=new ModeloReportes();
        $respuesta =$objRepor->selectReportes();
        $respuesta2 =$objRepor->pedirE();
        $respuesta3 =$objRepor->pedirL();

        $datos=['datos2'=>$respuesta,
                'datos3'=>$respuesta2,
                'datos4'=>$respuesta3,
        ];

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/libros/generarLibro', $datos);
    }

    public function SolicitarLibros(){
        $objRepor=new ModeloReportes();
        $respuesta =$objRepor->selectReportes();
        $respuesta2 =$objRepor->pedirE();
        $respuesta3 =$objRepor->pedirL();

        $datos=['datos2'=>$respuesta,
                'datos3'=>$respuesta2,
                'datos4'=>$respuesta3,
        ];

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/libros/solicitar', $datos);
    }

    public function solicitar(){

        $datos=[
            "idEstudiante"=>$_POST['est'],
            "idLibro"=>$_POST['li'],
        ];
        
        $objLibro=new ModeloReportes();
        $respuesta = $objLibro->insertar($datos);

        if($respuesta>0){
            return redirect()->to(base_url('/generarLibro'));
                
        }else{
            return redirect()->to(base_url('/SolicitarLibros'));
        }
    }
    
    public function generarLibro2(){

        $objRepor=new ModeloReportes();
        $respuesta =$objRepor->selectReportes();
        $respuesta2 =$objRepor->pedirE();
        $respuesta3 =$objRepor->pedirL();

        $datos=['datos2'=>$respuesta,
                'datos3'=>$respuesta2,
                'datos4'=>$respuesta3,
        ];

        $datos['cabecera']=view('/templates/encabezadoSecrexd.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/libros/generarLibro', $datos);
    }
}

?>