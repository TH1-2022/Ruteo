<?php 
    require "../utils/autoload.php";
    session_destroy();
    header("Location: /login.php");