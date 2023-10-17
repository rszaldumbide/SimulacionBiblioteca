<?php namespace App\Database\Seeds;  

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder{

    //funcion que permite generar usuarios a la bd
    public function run(){
        
        $usuario="admin";
        $contraseña=password_hash("admin", PASSWORD_DEFAULT);
        $rol="Gerente";

        $data=[
                'usuario'     => $usuario,
                'contraseña'  => $contraseña,
                'rol'         => $rol,
            ];

        $this->db->table('usuarios')->insert($data);
    }

}

?>