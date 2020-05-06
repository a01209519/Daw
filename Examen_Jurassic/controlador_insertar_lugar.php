<?php
    session_start();
    require_once("model_jurassic.php");
        
        $nombre = htmlspecialchars($_POST["nombre"]);
        AgregarLugar($nombre);
        header("location:index.php");
?>