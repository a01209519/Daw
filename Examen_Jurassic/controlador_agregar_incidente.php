<?php
    session_start();

    require_once("model_jurassic.php");
    

        $id_incidente = htmlspecialchars($_POST["incidente"]);
        $id_lugar = $_GET["id"];

        AgregarOcurren($id_incidente,$id_lugar);
    

    header("location:index.php");

?>