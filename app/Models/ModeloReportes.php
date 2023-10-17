<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloReportes extends Model{
    
    public function selectReportes()
    {
        $valor = $this->db->table('catalogoel el'); //tabla intermedia
        $valor->select('est.nombre, est.idEstudiante, est.cedula, li.titulo, li.idLibro, li.editor, el.idI'); //selecciono todos los campos de todas las tablas que quiero
        $valor->join('estudiantes est', 'el.idEstudiante=est.idEstudiante'); //join con la tabla estudiantes
        $valor->join('libros li', 'el.idLibro=li.idLibro'); //join con la tabla libros
        $query = $valor->get(); //ejecutas
        $respuesta = $query->getResultArray(); //te muestra los datos como array
        return $respuesta;
    }

    public function pedirL(){
        $valor=$this->db->table("libros");
        $valor->select('idLibro, titulo');
        $query = $valor->get(); //ejecutas
        $respuesta = $query->getResultArray(); //te muestra los datos como array
        return $respuesta;
    }

    public function pedirE(){
        $valor=$this->db->table("estudiantes");
        $valor->select('idEstudiante, nombre');
        $query = $valor->get(); //ejecutas
        $respuesta = $query->getResultArray(); //te muestra los datos como array
        return $respuesta;
    }

    public function insertar($datos){
        $valor=$this->db->table("catalogoel");
        $valor->insert($datos);

        return $this->db->insertID();
    }

}
?>