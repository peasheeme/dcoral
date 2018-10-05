<?php 
//declarar los campos de formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

//cabeceras
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

//contenido del mensaje
$contenido = '
<html>
<head></head>
<body>
	
</body>
</html>


';

/*Revisa que no estén vacíos los campos*/
if(empty($nombre) || empty($correo) || empty($mensaje)){
	printf("<script type='text/javascript'>alert('Revisa que los campos no esten vacios');</script>");
	printf("<script type='text/javascript'>window.location.href='contacto.html'</script>");
}
else{
	
}


?>