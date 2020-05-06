<?php

	function conectar_bd() {
		$conexion_bd = mysqli_connect("mysql1008.mochahost.com","dawbdorg_1209519","1209519","dawbdorg_A01209519");

		if( $conexion_bd == NULL){
			die("No se pudo conectar con la base de datos");
		}
		return $conexion_bd;
	}

	function desconectar_bd($conexion_bd){
		mysqli_close($conexion_bd);
	}

	function consultar_lugares(){
		$conexion_bd = conectar_bd();

		$resultado = '<table class="highlight">
                <thead>
                    <tr>
                        <th>Lugar</th>
                        <th>Incidentes</th>
                    </tr>
                    </thead>
                    <tbody>';

        $consulta = 'call ObtenerLugares()';
		
		$resultados = mysqli_query($conexion_bd,$consulta);

		while ($row = mysqli_fetch_assoc($resultados)) {
			$resultado .= "<tr>";
		    $resultado .= "<td>".$row['l_nombre']."</td>";
		    $resultado .= '<td>';
		    $resultado .= ObtenerIncidente($row['l_id']);
		    $resultado .= '<a href="agregarIncidente.php?id='.$row["l_id"].'" class="waves-effect waves-light btn"><i class="material-icons" left>add</i>Registrar Nuevo Incidente</a>';
		    $resultado .= '</td>';
		    $resultado .= "</tr>" ;
		}
		mysqli_free_result($resultados);

		desconectar_bd($conexion_bd);

		$resultado .= "</tbody>
            </table>";

		return $resultado;
	}

	function ObtenerIncidente($id){
		$conexion_bd = conectar_bd();
		$consulta = 'call ObtenerIncidente('.$id.')';

		$resultados = mysqli_query($conexion_bd,$consulta);
		$resultado = "";

		while ($row = mysqli_fetch_assoc($resultados)) {
			$resultado .= "".$row['i_incidente'];
			$resultado .= "  ".$row['o_tiempo'];
			$resultado .= "<br>";
		}

		mysqli_free_result($resultados);
		desconectar_bd($conexion_bd);
		return $resultado;
	}

	function consultar_incidentes($id, $inciden, $tabla){
		$conexion_bd = conectar_bd();

		$resultado = '<select name ="'.$tabla.'" id ="'.$tabla.'"><option value="" disabled selected>Selecciona un Incidente</option>';

      	$consulta = "SELECT $id, $inciden FROM $tabla " ;
      	$resultados = $conexion_bd->query($consulta);
      	while ($row = mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
			$resultado .= '<option value="'.$row["$id"].'">'.$row["$inciden"].'</option>';
		}
		desconectar_bd($conexion_bd);

		$resultado .= '</select><label>'.$tabla.'</label></div>';

		return $resultado;

	}

	function AgregarLugar($lugar){
		$conexion_bd = conectar_bd();
		$dml = 'call AgregarLugar((?));';

		if ( !($statement = $conexion_bd->prepare($dml)) ){
			die("Error: (" . $conexion_bd->errno . ") " . $conexion_bd->error);
			return 0;
			}
		if (!$statement->bind_param("s", $lugar)) {
			die("Error en vinculación: (" . $statement->errno . ") " . $statement->error);
			return 0;
			}
		if (!$statement->execute()) {
			die("Error en ejecución: (" . $statement->errno . ") " . $statement->error);
			return 0;
			}
			  desconectar_bd($conexion_bd);
			  return 1;
 
	}

	function AgregarOcurren($id_incidente,$id_lugar){
		$conexion_bd = conectar_bd();
		$dml = 'call AgregarOcurren((?),(?));';

		if ( !($statement = $conexion_bd->prepare($dml)) ){
			die("Error: (" . $conexion_bd->errno . ") " . $conexion_bd->error);
			return 0;
			}
		if (!$statement->bind_param("ss", $id_incidente, $id_lugar)) {
			die("Error en vinculación: (" . $statement->errno . ") " . $statement->error);
			return 0;
			}
		if (!$statement->execute()) {
			die("Error en ejecución: (" . $statement->errno . ") " . $statement->error);
			return 0;
			}
			  desconectar_bd($conexion_bd);
			  return 1;
 
	}

?>