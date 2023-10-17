<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModeloEstudiantes;

class ControladorEstudiantes extends Controller
{
    //funcion que importa css y js
    public function index(){
        $this->load->helper('url');
        $this->load->view('test');
    }

    public function CrearEstudiante(){

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/estudiante/CrearEstudiante', $datos);
    }

    public function VerEstudiante(){
        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        $objEst=new ModeloEstudiantes();

        $datos['estudiantes']=$objEst->findAll();

        return view('/estudiante/VerEstudiante', $datos);
    }
    //FUNCION O METODO QUE PERMITE INGRESAR LOS VALORES
    public function ingresarEst(){
        $datos=[
                    "nombre"=>$_POST['nombre'],
                    "cedula"=>$_POST['cedula'],
                    "edad"=>$_POST['edad'],
                    "genero"=>$_POST['genero'],
        ];
        $objEst=new ModeloEstudiantes();
        $respuesta = $objEst->insert($datos);

        if($respuesta>0){
            return redirect()->to(base_url('/VerEstudiante'));
                
        }else{
            return redirect()->to(base_url('/CrearEstudiante'));
        }
    }
    //FUNCION QUE PERMITE HACER UN SELECT DE ID PARA ACTUALIZAR
    public function obtenerNombreEst($id){
        $data=['idEstudiante' => $id];
        $objEst=new ModeloEstudiantes();
        $respuesta =$objEst->obtenerNombre($data);

        $datos=[
            "datos" => $respuesta
        ];

        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/estudiante/ActualizarEstudiante', $datos);
    }
    //FUNCION ACTUALIZAR
    public function actualizarEst(){
        $datos=[
            "nombre"=>$_POST['nombre'],
            "cedula"=>$_POST['cedula'],
            "edad"=>$_POST['edad'],
            "genero"=>$_POST['genero'],
        ];
        $id = $_POST['idEstudiante'];
        $objEst = new ModeloEstudiantes();
        $respuesta = $objEst->actualizar($datos, $id);

        if($respuesta){
            return redirect()->to(base_url('/VerEstudiante'));     
        }else{
            echo('<script>
                alert("Error, no se puedo actualizar");
            </script>');
        }
    }
    //FUNCION ELIMINAR
    public function eliminarEst($id){
        $objEst = new ModeloEstudiantes();
        $datos=[
            "idEstudiante" => $id
        ];
        $respuesta = $objEst->eliminar($datos);

        if($respuesta){
            return redirect()->to(base_url('/VerEstudiante'));     
        }else{
            echo('<script>
                alert("Error, no se puedo eliminar");
            </script>');
        }
    }
}

?>