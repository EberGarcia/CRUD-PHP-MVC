<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo MVC</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>

<body>


    <!--=====================================
	LOGOTIPO
	======================================-->

    <div class="container-fluid">

        <h3 class="text-center py-3">LOGO</h3>

    </div>

    <!--=====================================
	BOTONERA
	======================================-->

    <div class="container-fluid  bg-light">

        <div class="container">

            <ul class="nav nav-justified py-2 nav-pills">

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingresar">Ingreso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>

            </ul>

        </div>

    </div>

    <!--=====================================
	CONTENIDO
	======================================-->

    <div class="container-fluid">

        <div class="container py-5">

            <?php

            if (isset($_GET["pagina"])) {

                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingresar" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "editar" ||
                    $_GET["pagina"] == "salir"
                ) {

                    include 'paginas/' . $_GET["pagina"] . '.php';
                } else {

                    include "paginas/404.php";
                }
            } else {

                include "paginas/registro.php";
            }
            ?>

        </div>
    </div>
</body>

</html>