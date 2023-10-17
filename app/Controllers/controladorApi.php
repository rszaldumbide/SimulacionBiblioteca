<?php 
namespace App\Controllers;

//use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;

class ControladorApi extends ResourceController{
    protected $modelName = 'App\Models\ModeloUsuarios';
    protected $format = 'json';

    public function index(){
         return $this->respond($this->model->findAll());
    }
}