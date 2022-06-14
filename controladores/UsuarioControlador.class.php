<?php 
    require "../utils/autoload.php";

    class UsuarioControlador {
        public static function IniciarSesion($usuario,$password){
            $u = new UsuarioModelo();
            $u -> Nombre = $usuario;
            $u -> Password = $password;
            if($u -> Autenticar($usuario,$password)){
                $_SESSION["autenticado"] = true;
                $_SESSION["nombreUsuario"] = $u -> Nombre;
                return true;
            }
            return false;
        }
    }

