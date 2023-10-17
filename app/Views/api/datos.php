<?php
echo $cabecera;
?>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="tb" class="table table-warning table-hover">
                <thead>
                    <th>Número</th>
                    <th>titulo</th>
                    <th>Cuerpo</th>
                    <th>Cuerpo</th>
                </thead>
                <tbody>
                    <?php
                        foreach($users as $u):
                    ?>
                    <tr>
                        <td><?=$u['idUsuario']?></td >
                        <td><?=$u['usuario']?></td >
                        <td><?=$u['contraseña']?></td >
                        <td><?=$u['rol']?></td >
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

