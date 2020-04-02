<?php
if(isset($_POST['email'])) {
 
    // 
 
    $email_to = "ayrtoncontrerassep@gmail.com";
 
    $email_subject = "Contacto desde Web";
 
    function died($error) {
 
        // mensajes de error
 
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
 
        echo "Detalle de los errores.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Porfavor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }
 
    // Se valida que los campos del formulairo estén llenos
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['message'])) {
 
        die('Lo sentimos pero parece haber un problema con los datos enviados.');
 
    }
 //En esta parte el valor "name"  sirve para crear las variables que recolectaran la información de cada campo
 
    $name = $_POST['name']; // requerido

 
    $email_from = $_POST['email']; // requerido
 
    $phone = $_POST['phone']; // no requerido 
 
    $message = $_POST['message']; // requerido
 
    $error_message = "";//Linea numero 52;
 
//En esta parte se verifica que la dirección de correo sea válida 
 
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
 
  }
 
//En esta parte se validan las cadenas de texto
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'El formato del nombre no es válido<br />';
 
  }
 
 
  if(strlen($message) < 2) {
 
    $error_message .= 'El formato del texto no es válido.<br />';
 
  }
    if(strlen($phone) < 9) {
 
    $error_message .= 'El formato del texto no es válido.<br />';
 
  }
  
 
  if(strlen($error_message) > 0) {
 
    die($error_message);
 
  }
 
//Este es el cuerpo del mensaje tal y como llegará al correo
 
    $email_message = "Contenido del Mensaje.\n\n";
 
 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 
 
    $email_message .= "Nombre: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Teléfono: ".clean_string($phone)."\n";
 
    $email_message .= "Mensaje: ".clean_string($message)."\n";
 
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);
 
?>
 
<!-- Mensaje de que fue enviado-->
 <!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>Ejemplo en php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="formulario">
	<h2>Gracias! Nos pondremos en contacto contigo a la brevedad
 </h2>
	<div class="input"> </div>
	<form action="welcome.html" method="post">
<br>
  <button id="sendMessageButton" class="btn btn-outline-success" type="submit">Retornar</button></a>
</form>
</div>
<style>
    body{
	background: #2c3e50;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 100%;
	height: 100vh;
	 text-align: center;
}
h2{
	 text-align: center;
}
form {
  border: 3px solid #f1f1f1;
  }
.formulario {

padding: 10px;
border-radius: 10px;
border:3px solid #000 ;
box-shadow: 0 0 10px #fff;
max-width: 400px;
width: 98%;
background: white;
}
.boton {
	max-width: 250px;
	width: 100%;
	
	align-content:center;
	background: #e74c3c;
	align-items:center;
  
}
    
</style>

<?php
 
}
 
?>