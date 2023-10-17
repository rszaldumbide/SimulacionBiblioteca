<?php

namespace App\Controllers;

use App\Models\ModeloUsuarios; 
use App\Models\ModeloReportes;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;


class ControladorLogin extends Controller
{
    use ResponseTrait;
    //funcion que importa css y js
    public function index(){
        $this->load->helper('url');
        $this->load->view('test');
    }

    public function IniciarSesion(){
        
        $objUsu=new ModeloUsuarios();
        $resUsuarios =$objUsu->pedirU();

        $datos=['usuarios'=>$resUsuarios];

        $datos['cabecera']=view('/templates/encabezadoLogin.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/login/login', $datos);
    }

    public function inicio()
    {
        $datos['cabecera']=view('/templates/encabezado.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/login/inicio', $datos);
    }
    public function inicio2()
    {
        $datos['cabecera']=view('/templates/encabezadoSecrexd.php');
        $datos['pie']=view('/templates/pie.php');

        return view('/login/inicio', $datos);
    }

//usuario, contraseña, usu

    public function login2(){

        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $rol=$_POST['usu'];
        $objUsu=new ModeloUsuarios();
        
        $peticion=\Config\Services::curlrequest();
        $datos['users']=json_decode(\file_get_contents('http://localhost/biblioteca/Apipees'), true);

        foreach($datos as $usu){
            if($usu['usuario']==$usuario && $usu['contraseña']==$contraseña && $usu['rol']==$rol){
                if($usu['rol']=='Gerente'){
                    return redirect()->to(base_url('/generarLibro'));
                }else if($usu['rol']=='Secretaria'){
                    return redirect()->to(base_url('/generarLibro2'));
                }
            }else{
                return redirect()->to(base_url('/IniciarSesion'));
            }
        }

    }

    public function salir(){
        $session= session();
        $session->destroy();
        return redirect()->to(base_url('/IniciarSesion'));
    }

    
     
    public function api()
    {
        $objUsu = new ModeloUsuarios();
        return $this->respond(['usuarios' => $objUsu->findAll()], 200);
    }


    
    public function login(){

        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $objUsu=new ModeloUsuarios();

        $resUsuarios=$objUsu->obtenerUsuarios(['usuario'=>$usuario, 'contraseña'=>$contraseña]);
        
        if(count($resUsuarios)>0 ){
    
            $data = [
                        "usuario" => $resUsuarios[0]['usuario'],
                        "rol" => $resUsuarios[0]['rol']
                    ];

            $session= session();
            $session->set($data);

            foreach($resUsuarios as $d){
                if($d['usuario']==$usuario && $d['contraseña']==$contraseña){
                    if($d['usuario']=='admin'){
                        return redirect()->to(base_url('/generarLibro'));
                    }else if($d['usuario']=='secre'){
                        return redirect()->to(base_url('/generarLibro2'));
                    }
                }else{
                    return redirect()->to(base_url('/IniciarSesion'));
                }
            }

            //return redirect()->to(base_url('/generarLibro'));

            //echo ('<script>alert($resUsuarios);</script>');
            
        }else{
            return redirect()->to(base_url('/IniciarSesion'));
            //echo ('<script>alert($resUsuarios);</script>');
        }
    }

    

}

?>