<form method="POST">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="password">
    </div>
    <?php
    $registro = ControllerFormulario::ctrRegistro();

    if ($registro == "ok") {
        echo '<div class="alert alert-success">Usuario registrado.</div>';
    }
    if ($registro == "error") {
        echo '<div class = "alert alert-danger">Error: No se permiten caracteres extraños</div>';
    }
    ?>
    <button type="submit" class="btn btn-primary">Registro</button>
</form>