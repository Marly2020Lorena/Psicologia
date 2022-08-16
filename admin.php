<?php
$servername = "localhost";
$database = "u330614243_pacientes1";
$username = "u330614243_pacientes1";
$password = "Pacientes1";
// Crear conexion
$conn = mysqli_connect($servername, $username, $password, $database);
/*// Validar conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
</head>
<body style="background-color:#FED4DA">
<header id="header">
        <nav>
        <img src="images/logo_sim.png" class="logo-nav">
        <div class="navbar-left">
            <ul>
                <li><a href=""></a> </li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <ul>
                <li> <a href="login.php"> CERRAR SESION</a> </li>
            </ul>
        </div>
        </nav>
    </header>

<section class="contenedor">
		<center>
		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<center><h2>CONSULTA DE RESERVAS</h2></center>

		
			<table>
			<center>
	<?php
			$consulta = "SELECT * FROM pacientes1";
			//$params = array();
			//$options =  array( "Scrollable" => MYSQL_CURSOR_KEYSET );
$ejecutarConsulta = mysqli_query( $conn, $consulta /*, $params, $options*/);
			$row_count = mysqli_num_rows( $ejecutarConsulta );
			
							if($row_count<1){
								echo '
								<tr>
								<th></th>
								<th></th>
								<th></th>
								<th>POR FAVOR VERIFIQUE LA INFORMACIÓN</th>
								</tr>';
															}else{
								while($fila = mysqli_fetch_array($ejecutarConsulta))
								echo utf8_encode('
										<tr>
                                            <th>CEDULA:</th>
                                            <td>'.$fila['cedula'].'</td>
                                            <th>NOMBRE:</th>
											<td>'.$fila['nombres'].'</td>
                                            <th>APELLIDO:</th>
                                            <td>'.$fila['apellidos'].'</td>
											<th>FECHA:</th>
                                            <td>'.$fila['fecha'].'</td>
											<td><a href="editar.php?cedula='.$fila['cedula'].'"><img src="./images/editar.png" width=20></a></td>
                                            <td><a href="eliminar.php?cedula='.$fila['cedula'].'"><img src="./images/eliminar.png" width=20></a></td>
										</tr>
										')
										;
								}														
	?>		
			</center>
			</table>
            </form>

		</center>
		</section>
</body>
</html>