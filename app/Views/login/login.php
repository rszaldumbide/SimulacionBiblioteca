<?php
echo $cabecera;
?>

<section>

    <div class="login-box">
        <h3>INICIAR SESION</h3>
        <form method="POST" action="<?=base_url('/login')?>">
            <div class="user-box">
                <input type="text" name="usuario" id="usuario" required>
                <label>Usuario</label>
            </div>
            <div class="user-box">
                <input type="password" name="contraseña" id="contraseña" required>
                <label>Contraseña</label>
            </div>

            <br>
            <div class="text-center">
                <input type="submit" class="btn btn-info" value="INGRESAR" 
                name="btnIngresar" id="btnIngresar">
            </div>
        </form>
    </div>

</section>

<?php
echo $pie;
?>