<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ControladorDatos extends Controller
{
    //funcion que importa css y js
    public function index(){
        $this->load->helper('url');
        $this->load->view('test');
    }

    public function mostrarDatos()
    {
        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        //para importar la confi del servicio

        $peticion=\Config\Services::curlrequest();
        $datos['users']=json_decode(\file_get_contents('http://localhost/biblioteca/Apipees'), true);

        return view('/api/datos', $datos);
    }
    
}

?>