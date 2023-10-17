<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloLibros extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idLibro';
    protected $allowedFields = ['codigo', 'titulo', 'editor'];

    public function insertar($datos){
        $valor=$this->db->table("libros");
        $valor->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerNombre($data){
        $valor=$this->db->table('libros');
        $valor->where($data);

        return $valor->get()->getResultArray();
    }

    public function actualizar($data, $id){
        $valor=$this->db->table('libros');
        $valor->set($data);
        $valor->where('idLibro', $id);

        return $valor->update();
    }

    public function eliminar($datos){
        $valor=$this->db->table('libros');
        $valor->where($datos);
        return $valor->delete();
    }
}
?>