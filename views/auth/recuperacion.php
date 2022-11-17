<h1 class="nombre-pagina">Contraseña Olvidada</h1>
<p class="descripcion-pagina">Reestablece tu contraseña indicando tu correo electrónico a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form  class="formulario" action="/recuperacion" method="POST">
    <div class="campo">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" placeholder="Tu Correo Electrónico">
    </div>

    <input type="submit" value="Recuperar Contraseña" class="boton">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>