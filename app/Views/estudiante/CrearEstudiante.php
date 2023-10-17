<?php
echo $cabecera;
?>
<section>
    <div class="text-center p-3 m-4" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-1">
                <h2 class="mb-4 text-center text-warning">Ingreso de Estudiantes</h2>

                <form action="<?= base_url('/ingresarEst')?>" method="POST">

                    <div class="user-box">
                        <input type="text" name="nombre" id="nombre" required>
                        <label for="nombre">Nombre:</label>
                    </div>

                    <div class="user-box">
                        <input type="text" name="cedula" id="cedula" required>
                        <label for="cedula">Cedula:</label>
                    </div>

                    <div class="user-box"> 
                        <input type="text" name="edad" id="edad" required>
                        <label for="edad">Edad:</label>
                    </div>

                    <div class="mb-3" style="color: white; text-align: left;">
                        <label for="sexo">Genero:</label>

                        <div>
                            <input type="radio" name="genero" value="Masculino" checked>
                            <label for="sexoM">
                                Masculino
                            </label>
                        </div>

                        <div>
                            <input type="radio" name="genero" value="Femenino">
                            <label for="sexoF">
                                Fememino
                            </label>
                        </div>

                    </div>

                    <button class="btn btn-warning">Ingresar</button>
                    
                </form>
            </div>
            
        </div>
    </div>
</section>

<?php
echo $pie;
?>