<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center p-3 m-5">
        <div class="border table-responsive card rounded p-4" style="background-color: rgb(58, 57, 54);">
            <h2 class="mb-4 text-center text-warning">Todos los Estudiantes</h2>
            <table id="tb" class="table table-warning table-hover">
                <thead>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <!--th>Pedir Libro</th-->
                    <th>Editar</th>
                    <th>Eliminar</th>

                </thead>
                <tbody>
                <?php
                        foreach($estudiantes as $estudiante):
                    ?>
                    <tr>
                        <td><?=$estudiante['idEstudiante']?></td>
                        <td><?=$estudiante['nombre']?></td>
                        <td><?=$estudiante['cedula']?></td>
                        <td><?=$estudiante['edad']?></td>
                        <td><?=$estudiante['genero']?></td>
                        <!--td><a href="<?php echo base_url().'/Pedidos/'.$estudiante['idEstudiante']?>" class="btn btn-info"></a></td-->
                        <td><a href="<?php echo base_url().'/obtenerNombreEst/'.$estudiante['idEstudiante']?>" class="btn btn-warning"></a></td>
                        <td><a href="<?php echo base_url().'/eliminarEst/'.$estudiante['idEstudiante']?>" class="btn btn-danger"></a></td>
                    </tr>
                    <?php
                        endforeach;
                    ?>
                    
                </tbody>
            </table>
        </div>
        
    </div>

</section>
