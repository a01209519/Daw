<?php 
  session_start();
  $_SESSION["nombre"] = $_POST["nombre"];
  $_SESSION["apellido"] = $_POST["apellido"];

  echo "<center><h3> Hola ". $_SESSION["nombre"]." " . $_SESSION["apellido"]."<h3></center><br>";

  $_SESSION["numero1"] = $_POST["numero1"];
  $_SESSION["numero2"] = $_POST["numero2"];
  $_SESSION["numero3"] = $_POST["numero3"];

  echo "<center><h3> Tus numeros de sesión son:  ". $_SESSION["numero1"]." " . $_SESSION["numero2"]. " ". $_SESSION["numero3"]. "<h3></center><br>";
  ?>