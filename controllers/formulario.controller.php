<?php

class ControllerFormulario
{

    static public function ctrRegistro()
    {
        if (isset($_POST["nombre"])) {
            $tabla = "clientes";
            $datos = array(
                "nombre" => $_POST["nombre"],
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            );
            $respuesta = ModelFormulario::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }
    static public function ctrListar($item, $valor)
    {
        $tabla = "clientes";

        $respuesta = ModelFormulario::mdlListar($tabla, $item, $valor);
        return $respuesta;
    }

    public function ctrAcceder()
    {
        if (isset($_POST["email"])) {

            $tabla = "clientes";
            $item = "email";
            $valor = $_POST["email"];

            $respuesta = ModelFormulario::mdlListar($tabla, $item, $valor);
            //  echo '<pre>';            print_r($respuesta);            echo '</pre>';

            if (
                $respuesta["email"] == $_POST["email"]  &&
                $respuesta["password"] == $_POST["password"]
            ) {
                $_SESSION["validarIngreso"] = "ok";

                echo '<script> window.location = "index.php?pagina=inicio"; </script>';
            } else {

                echo '<div class = "alert alert-danger"> Usuario y/o contraseña incorrectas.</div>';
            }
        }
    }

    static public function ctrActualizar()
    {
        if (isset($_POST["actualizarNombre"])) {
            if ($_POST["actualizarPassword"] != "") {
                $password = $_POST["actualizarPassword"];
            } else {
                $password = $_POST["passwordActual"];
            }

            $tabla = "clientes";
            $datos = array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );
            $respuesta = ModelFormulario::mdlActualizar($tabla, $datos);
            return $respuesta;
        }
    }

    public function ctrEliminar()
    {
        if (isset($_POST["eliminar"])) {
            $tabla = "clientes";
            $valor = $_POST["eliminar"];

            $respuesta = ModelFormulario::mdlEliminar($tabla, $valor);

            if ($respuesta == "ok") {

                echo '<script> 
                if ( window.history.replaceState ) {

                    window.history.replaceState( null, null, window.location.href );

                }
                window.location = "index.php?pagina=inicio; 
                
                </script>';
            }
        }
    }
}