<!DOCTYPE html>
<html>
	<head>
		<title>Formulario De Contacto - Mensaje Enviado</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		    <center>
		    	<?php 
$myemail = 'secopley7@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

			<form action="enviar.php" method="POST">
				<p>Nombre</p>
				<label for="nombre">Su nombre</label>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<p>Correo</p>
				<label for="correo">Direccion De Correo</label>
				<br>
				<input type="email" name="email" placeholder="alguien@algo.com" required>
				<p>Mensaje</p>
				<label for="mensaje">Su Mensaje</label>
				<br>
				<textarea name="mensaje" placeholder="Mensaje" required></textarea>
				<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
	        <center/>
	</body>
</html>