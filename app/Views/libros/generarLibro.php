<?php
echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="border card rounded p-4" style="background-color: rgb(58, 57, 54);">
        <h2 class="mb-4 text-center text-warning">Reporte de Pedidos</h2>
        
        <div class="table-responsive">
            <table id="tb" class="table table-warning table-hover">
                <thead>
                    <th>Número</th>
                    <th>Nombre del Estudiante</th>
                    <th>Cedula del Estudiante</th>
                    <th>Nombre del Libro</th>
                    <th>Autor del Libro</th>
                </thead>
                <tbody>
                    <?php
                        foreach($datos2 as $dato):
                    ?>
                    <tr>
                        <td ><?=$dato['idI']?></td >
                        <td ><?=$dato['nombre']?></td >
                        <td ><?=$dato['cedula']?></td >
                        <td ><?=$dato['titulo']?></td >
                        <td ><?=$dato['editor']?></td >
                    </tr>
                    <?php
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
            
        </div>
        
    </div>

</section>

