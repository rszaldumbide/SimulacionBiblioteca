<?php
echo $cabecera;
?>

<?php 
    $id=$datos[0]['idEstudiante'];
    $nombre=$datos[0]['nombre'];
    $cedula=$datos[0]['cedula'];
    $edad=$datos[0]['edad'];
    $genero=$datos[0]['genero'];
?>

<section>
<div class="text-center p-3 m-4" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-1">
                <h2 class="mb-4 text-center text-warning">Actualizar Campos</h2>

                <form action="<?= base_url('actualizarEst')?>" method="POST">
                <input type="text" id="idEstudiante" name="idEstudiante" hidden value="<?php echo $id?>">
                    <div class="user-box">
                        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>">
                        <label for="nombre">Nombre:</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="cedula" id="cedula" value="<?php echo $cedula?>">
                        <label for="cedula">Cedula:</label>
                        
                    </div>
                    <div class="user-box"> 
                    <input type="text" name="edad" id="edad" value="<?php echo $edad?>">
                        <label for="edad">Edad:</label>
                    </div>
                    <div class="mb-3" style="color: white; text-align: left;">
                        <label for="Sexo">Genero:</label>
                        <div>
                            <input type="radio" name="genero" value="<?php echo $genero?>" checked>
                            <label for="sexo">
                                Masculino
                            </label>
                        </div>

                        <div>
                            <input type="radio" name="genero" value="Femenino">
                            <label for="sexo">
                                Fememino
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-warning">Actualizar</button>
                    <a href="<?= base_url('/VerEstudiante') ?>" class="btn btn-warning">Atras</a>
                </form>
            </div>
            
        </div>
    </div>
</section>
<?php
echo $pie;
?>