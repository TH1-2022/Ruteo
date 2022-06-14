<?php   
    require "../utils/autoload.php";
    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        header("HTTP/1.0 404 Not Found");
        echo "404";
        die();
    }
    if(UsuarioControlador::IniciarSesion($_POST['usuario'],$_POST['password'])){
        header("Location: /paginaDeInicio.php");
    }

    else 
        header("Location: /login.php?error=true");


