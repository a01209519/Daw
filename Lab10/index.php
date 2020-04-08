<?php 
include("_header.html");
include("_body.html");
 function promedio(){
          $numeros = array($_POST["num1"], $_POST["num2"], $_POST["num3"]);
          $promedio = 0;
          sort($numeros);
          for ($i=0; $i <count($numeros) ; $i++) {
            $promedio += $numeros[$i];
          }
          $promedio = $promedio/3;
          echo "<br><br><div class ='container'><h5>El promedio es: " . $promedio . "</h5><br>";
          echo "<h5>La mediana es: " . $numeros[1] . "</h5><br>";
          echo "<h5>Los numeros en orden ascendente son: ";
          for ($i=0; $i <count($numeros) ; $i++) {
            echo $numeros[$i] . " ";
          }
          echo "<br>" . "<br><h5>Los numeros en orden descendente son: ";
          for ($i=count($numeros) - 1; $i >= 0 ; $i--) {
            echo $numeros[$i] . " ";
          }
          echo "</h5><br> </div>";
        }
  function cubo(){
        $n4 = $_POST["num4"];
        echo "<table border='2' class='highlight centered responsive-table' cellspacing='0'>
          <tr><th>Numero</th><th>Cuadrado</th><th>Cubo</th></tr>";
        for ($i=0; $i <= $n4; $i++) {
          $cubo = $i*$i*$i;
          $cuadrado = $i*$i;
          echo"<tr ><td>$i</td><td>$cuadrado</td><td>$cubo</td><tr>";
        }
        echo "</table> <br> <br> <br>";
  }
   		promedio();
      cubo();
include("_footer.html")
?> 