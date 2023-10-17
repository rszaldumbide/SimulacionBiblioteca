<?php
echo $cabecera;
?>
<section>
    <div class="text-center p-3 m-5" style="display: flex; align-items: center; justify-content: center;">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div class="forms-box mt-4">
                <h2 class="mb-4 text-center text-warning">Ingreso de libros</h2>

                <form action="<?= base_url('/ingresar')?>" method="POST">
                    <div class="user-box">
                        <input type="text" name="codigo" id="codigo" required>
                        <label for="codigoLibro">Código:</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="titulo" id="titulo" required>
                        <label for="nombreLibro">Nombre del Libro:</label>
                        
                    </div>
                    <div class="user-box"> 
                        <input type="text" name="editor" id="editor" required>
                        <label for="autorLibro">Autor del Libro:</label>
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