<?php 
    require "../utils/autoload.php";

    $Url = $_SERVER['REQUEST_URI'];
    $Method = $_SERVER['REQUEST_METHOD'];
    $context = [
        'get' => $_GET,
        'post' => $_POST,
        'server' => $_SERVER,
        'session' => $_SESSION,
        'http' => $_HTTP
    ];

    switch($Url){
        case "/":
            renderVista("inicio");
            break;
        case "/login": 
            if($Method ===  "GET")
                renderVista("login");
            if($Method === "POST")
                SesionControlador::IniciarSesion($context);
            break;
        case "/usuario/alta":
            if($Method === "POST")
                UsuarioControlador::Alta($context);
            if($Method === "GET")
                renderVista("altaDeUsuario");
            break;
        case "/cerrarSesion":
            SesionControlador::CerrarSesion($context);
            break;
        default:
            PageNotFound();

            
    }
       