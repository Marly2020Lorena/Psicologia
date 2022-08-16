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
    <link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
    <title>contactanos</title>
</head>
<body>
    <header id="header">
        <nav>
        <img src="images/logo_sim.png" class="logo-nav">
        <div class="navbar-left">
            <ul>
                <li> <a href="index.html">INICIO</a> </li>
                <li><a href="catalogo.html">SERVICIOS</a></li>
                <li><a href="registro.php">CONTACTANOS</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <ul>
                <li> <a href="login.php">INICIAR SESION</a> </li>
            </ul>
        </div>
        </nav>
    </header>
    <section>
        <center><h1>CONTAMOS CON DIFERENTES CANALES DE ATENCION</h1></center>
			<div class="cards-container">

				<div class="product-card">
					<img src="./images/whatsapp1.jpg" alt="" class="product-nfo">
					<div class="product-info">
						<div>
							<p>CONSULTAS VIA WHATSAPP</p>
						</div>
					</div>
				</div>
				<div class="product-card">
					<img src="./images/visitanos.png" alt="" class="product-nfo">
					<div class="product-info">
						<div>
						<p>ATENCION PRESENCIAL</p>
						</div>
					</div>
				</div>
				<div class="product-card">
					<img src="./images/atencion_telefonica.jpg" alt="" class="product-nfo">
					<div class="product-info">
						<div>
						<p>ATENCION TELEFONICA</p>
						</div>
					</div>
				</div>
			</div>	
	</section>

    <section class="contenedor">
        <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
            <div class="contenedor-inputs-ll">
            <center><h1>AGENDA TU CITA</h1></center>
                <input type="number" name="cedula" placeholder="Numero de documento:" required>
                <input type="text" name="nombre" placeholder="Nombres:" required>
                <input type="text" name="apellido" placeholder="Apellidos:" required>
                <input type="number" name="edad" placeholder="Ingresa tu edad:" required>
                <input type="text" name="direccion" placeholder="Indicanos tu direeccion:" required>
                <input type="number" name="telefono" placeholder="N° Telefono:" required>
                <input type="email" name="email" placeholder="Correo electrónico:" required>
                <input type="text" name="informacion" placeholder="Motivo de consulta:" required>
                <input type="date" name="fecha" placeholder="Fecha" required>	
                <br>
                <h2>
                    <input type="submit" class="primary-button login-button" name="enviar" value="¡COMEZAR YA!" >
                </h2>		
            </div>
            </form>

            <table>
                <tbody  height="100" width="100">
                <center>
				<?php
	
	if(isset($_POST['enviar'])){

		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$edad = $_POST['edad'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$informacion = $_POST['informacion'];
        $fecha = $_POST['fecha'];

		$insertar = "INSERT INTO pacientes1 (cedula, nombres, apellidos, edad, direccion, telefono, correo, informacion,fecha) VALUES	('$cedula', '$nombre', '$apellido', '$edad', '$direccion', '$telefono', '$email', '$informacion', '$fecha')";	
		if (mysqli_query($conn, $insertar)) {
			echo "			<tr>
								<th></th>
								<th>¡REGISTRO EXITOSO, PRONTO NOS CONTACTAREMOS CONTIGO!</th>
							</tr>";
		} else {
			echo "Error: " . $insertar . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>		
                </center>
                </table>
    </section>
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