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
<div class="login">
        <div class="form-container">
		<center>
		<form action="" class="formulario" id="formulario" name="formulario" method="POST">

		
			<table>
			<center>
	<?php
	if(isset($_POST['Login'])){
		$cedula=$_POST['cedula'];
		$nombres=$_POST['nombres'];
		$fecha=$_POST['fecha'];

		$elimina="delete from pacientes1 WHERE cedula='$cedula'";
		$resultado = mysqli_query( $conn, $elimina);

		if($resultado){
			echo "Borrado correcto.";
		}else{
			echo "No se pudo eliminar registro.";
		}
	}else{
		$cedula=$_GET['cedula'];
		$consulta = "SELECT * FROM pacientes1 where cedula='".$cedula."'";
		$resultado = mysqli_query( $conn, $consulta);

		$fila=mysqli_fetch_assoc($resultado);
		$nombres=$fila["nombres"];
		$fecha=$fila["fecha"];
		$apellidos=$fila["apellidos"];
	}														
	?>		
			</center>
			</table>
			<center><h2>¿CONFIRMAS QUE QUIERES ELIMINAR LA RESERVA?</h2></center>
			<input type="number" name="cedula" value="<?php echo $cedula; ?>" >
			<input type="text" name="nombres" value="<?php echo $nombres; ?>">
            <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" >	
			<input type="date" name="fecha" value="<?php echo $fecha; ?>" >	
			<input type="submit" name="Login" value="ELIMINAR" class="primary-button login-button">
			<a href="./admin.php">VOLVER</a>
            </form>

		</center>
</div>
</div>
<footer class="copyright">
        <center>
            <h3>
            <br>
            <div> <img src="images\logo.png" width="150"> </div>
            <div>| contactanos@psycomental.com | Teléfono: 601 825 9206 |  </div>
            </br>
            </h3>
        </center>
    </footer>
</body>
</html>