<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet'
		   type='text/css'
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet'
		   type='text/css'
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap' height = "1000px">
	<header class='main' id='h1'>
		<span class="right"><a href="registro">Registrarse</a></span>
      	<span class="right"><a href="login">Login</a></span>
      	<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	   <nav class='main' id='n1' role='navigation'>
	    <span><a href='layout.html'>Inicio</a></spam>
		<span><a href='preguntas.html'>Insertar Pregunta</a></spam>
	    <span><a href='creditos.html'>Creditos</a></spam>
	   </nav>

    <section class="main" id="s1">

        <div>




<?php
//phpinfo();
include "ParametrosDB0.php";
$mysqli = mysqli_connect($server, $user, $pass, $basededatos);
if (!$mysqli)
{
die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}

$sql="INSERT INTO preguntas(Direccion, Pregunta, RespCorrecta, RespIncorrecta1,
RespIncorrecta2, RespIncorrecta3, Complejidad, Tema) VALUES
('$_POST[nombreDirCorreo]','$_POST[nombrePregunta]','$_POST[nombreRespCorrecta]',
'$_POST[nombreRespIncorrecta1]', '$_POST[nombreRespIncorrecta2]','$_POST[nombreRespIncorrecta3]'
,'$_POST[nombreComplejidad]','$_POST[nombreTema]')";

//echo $sql;

if (!mysqli_query($mysqli ,$sql))
{
die('Error en el almacenamiento de la pregunta: ' . mysqli_error($mysqli));
}

echo "<strong>Pregunta almacenada correctamente.</strong>";
echo "<p> <a href='verDatos.php'> Ver preguntas </a>";
mysqli_close($mysqli);
echo '</div> </section> </div> </body> </html>'
?>
