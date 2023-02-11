<?php
    // Clase del controlador de usuarios
    class UsuarioController{
        // funcion para verificar el inicio de sesion
        public static function login($user, $pass){
            // Iniciamos la session para poder usar sus propiedades
            session_start();

            // Importamos el modelo de usuario
            require '../models/Usuario.php';

            // Hacemos la peticion y la guardamos en una variable
            $auth = UsuarioModel::validarLogin($user, $pass);

            // Si consiguio resultado
            if($auth){

                // Guardamos el usuario en una propiedad de session
                $_SESSION['usuario'] = $auth->usuario;

                // Segun el identificador colocamos el rol correspondiente
                switch($auth->rol_id){
                    case 1:
                        $_SESSION['rol'] = "Administrador/a";
                        break;
                    case 2:
                        $_SESSION['rol'] = "Secretario/a";
                        break;
                    case 3:
                        $_SESSION['rol'] = "Supervisor/a";
                        break;
                    case 4:
                        $_SESSION['rol'] = "Visitante";
                        break;
                    case 5:
                        $_SESSION['rol'] = "Desarrollador/a";
                        break;
                }

                // Redireccionamos a la vista home
                header('location:../views/home.php');
            }else{
                // Redireccionamos al login por tener credenciales erroneas
                header('location:../index.php');
            }
        }
    }

    // Si el metodo http es post
    if($_POST){
        // Se le envia los datos enviados por el usuario a la funcion de la clase login
        UsuarioController::login($_POST["user"], $_POST["password"]);
        return;
    }
?>