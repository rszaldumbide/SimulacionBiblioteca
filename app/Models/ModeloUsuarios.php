<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModeloUsuarios extends Model{
    //select todos los valores

    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idUsuario';
    protected $allowedFields = ['usuario', 'contraseña', 'rol'];

    public function pedirU(){
        $valor=$this->db->table("usuarios");
        $valor->select('*');
        $query = $valor->get(); //ejecutas
        $respuesta = $query->getResultArray(); //te muestra los datos como array
        return $respuesta;
    }
    //select por id
    public function obtenerUsuarios($data)
    {
        $usuario=$this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}
?>