<form method="POST">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password">
    </div>
    <?php
    $acceder = new ControllerFormulario();
    $acceder->ctrAcceder();
    ?>
    <button type="submit" class="btn btn-primary">Acceder</button>
</form>