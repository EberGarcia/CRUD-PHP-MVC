<?php
if ($_GET["id"]) {
    $item = "id";
    $valor = $_GET["id"];

    $clientes = ControllerFormulario::ctrListar($item, $valor);
    //echo '<pre>';print_r($clientes);echo '</pre>';
}


?>
<form method="POST">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="actualizarNombre" value="<?php echo $clientes["nombre"] ?>">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="actualizarEmail" value="<?php echo $clientes["email"];  ?>">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd"
            name="actualizarPassword">

        <input type="hidden" name="passwordActual" value="<?php echo $clientes["password"]; ?>">
        <input type="hidden" name="idUsuario" value="<?php echo $clientes["id"]; ?>">

    </div>
    <?php
    $actualizar = ControllerFormulario::ctrActualizar();

    if ($actualizar == "ok") {

        echo '<div class="alert alert-success"> Usuario actualiado</div>';
    }
    ?>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>