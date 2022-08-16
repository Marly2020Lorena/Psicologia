<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
</head>
<body style="background-color:#FED4DA">
<header id="header">
        <nav>
        <img src="" class="logo-nav">
        <div class="navbar-left">
            <ul>
                <li><a href="index.html">INICIO</a> </li>
                <li><a href="catalogo.html">SERVICIOS</a></li>
                <li><a href="registro.php">CONTACTANOS</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <ul>
                <li> <a href=""></a> </li>
            </ul>
        </div>
        </nav>
    </header>
    <div class="login">
        <div class="form-container">
            <img src="./images/logo.png" alt="logo" class="logo">
            <form action="" class="form"  name="formulario" method="POST">
                <label for="email" class="label">Usuario</label>
                <input type="text" name="usuario" id="email" placeholder="Usuario" class="input input-email">
                <label for="password" class="label">Contraseña</label>
                <input type="password" name="contrasena" id="email" placeholder="**********" class="input input-password">
                <input type="submit" value="Login" class="primary-button login-button">
            </form>
        </div>
        <table class="table">
			<center>
	
    <?php
        $usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];

        if ($usuario=="admin" and $contrasena=="123456"){
            header('location: admin.php');
    }else{
        echo "			
        <tr>
        <th></th>
        <th>¡USUARIO Y/O CONTRASEÑA INCORRECTOS!</th>
        </tr>";
                }
    ?>		
	</center>
	</table>
    </div>   
</body>
</html>