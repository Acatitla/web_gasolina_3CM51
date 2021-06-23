<?PHP
	$hostname_localhost ="freedb.tech:3306";
	$database_localhost ="freedbtech_progweb";
	$username_localhost ="freedbtech_progweb";
	$password_localhost ="xxPmv2AG8H";
	$json=array();
        include("index.php"); 


//realiza conexion
    // $conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
        
    //     if ($conexion) {
    //         $idEmpresa= $_POST ['idEmpresa'];
    //         $costoPro= $_POST ['costoPro'];
	//     $ganancia= $_POST ['ganancia'];
            
    //         //Bloquear registros vacios
    //         if ($_POST["idEmpresa"]!==""){
    //             //registro a DB
    //            $consulta="call ventaCredito('$idEmpresa','$costoPro','$ganancia')";
    //         } else {
    //            echo "Llene los campos requeridos <br>";
    //         }
    //         $registro=mysqli_query($conexion,$consulta);
    //             //Confirmacion
    //            if ($registro) {
	// 	mysqli_close($conexion);
    //              echo "Registro almacenado. <br>";
    //            }
    //         else {
    //            echo "error en la ejecución del registro <br>";
    //         }
    //     }

$conexionA = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$consultaA="select * from asiento order by idasiento;";
		$resultadoA=mysqli_query($conexionA,$consultaA);
		if($conexionA){
			echo "<table>";
			echo "<th> idempresa</th>";
			echo "<th> idasiento</th>";
			echo "<th> fecasiento</th>";
			echo "<th> idoperacion</th>";
			echo "<th> monto</th>";
			
			while($registroA=mysqli_fetch_array($resultadoA)){
				$result["idempresa"]=$registroA['idempresa'];
				$result["idasiento"]=$registroA['idasiento'];
				$result["fecasiento"]=$registroA['fecasiento'];
				$result["idoperacion"]=$registroA['idoperacion'];
				$result["monto"]=$registroA['monto'];
				$json['Clasificador'][]=$result;
				
				echo "<tr>";
					echo "<td>".$registroA['idempresa']." </td>";
					echo "<td>".$registroA['idasiento']." </td>";
					echo "<td>".$registroA['fecasiento']." </td>";
					echo "<td>".$registroA['idoperacion']." </td>";
					echo "<td>".$registroA['monto']." </td>";
				echo "</tr>";
			}
			
			echo "</table>";
			
			json_encode($json);
			mysqli_close($conexionA);
		}
		else{
			echo "error";
		}
			
	?>