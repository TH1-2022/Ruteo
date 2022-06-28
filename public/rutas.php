<?php 
    require "../utils/autoload.php";

    Routes::AddView("/","inicio");
    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");
    Routes::AddView("/usuario/alta","altaDeUsuario");
    Routes::Add("/usuario/alta","post","UsuarioControlador::Alta");
    Routes::Add("/cerrarSesion","get","SesionControlador::CerrarSesion");    
    
    Routes::Run();

       