<?php
    echo $cabecera;
?>
<section class="mb-5">
    <div class="text-center table-responsive p-3 m-5">
        <div class="border card rounded p-4" style="background-color: rgb(58, 57, 54);">
        <h2 class="mb-4 text-center text-warning">Reporte de Pedidos</h2>
            <form action="<?= base_url('/solicitar')?>" method="POST">
                <div class="mb-4" style="display:flex; justify-content: space-between;">
                    <div>
                    <label class="text-warning" for="">ESTUDIANTES: </label><select name="est" id="est">
                        <option value="letras">Seleccione una opcion</option>
                        <?php
                            foreach($datos3 as $e):
                        ?>
                        <tr>
                            <option value="<?=$e['idEstudiante'] ?>"><?=$e['nombre']?></option>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        </select>
                    </div>
                    <div>
                    <label class="text-warning" for="">LIBROS: </label><select name="li" id="li">
                        <option value="letras">Seleccione una opcion</option>
                        <?php
                            foreach($datos4 as $l):
                        ?>
                        <tr>
                            <option value="<?=$l['idLibro'] ?>"><?=$l['titulo']?></option>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        </select>
                    </div>
                    <div>
                        <button type="submit" id="btnPedir" name="btnPedir" class="btn btn-info">Pedir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
    echo $pie;
?>