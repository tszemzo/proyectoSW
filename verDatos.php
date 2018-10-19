<head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Ver Datos</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <div id='page-wrap' >
	<header class='main' id='h1'>
		<span class="right"><a href="registro">Registrarse</a></span>
      	<span class="right"><a href="login">Login</a></span>
      	<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: Juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.html'>Inicio</a></spam>
		<span><a href='preguntas.html'>Insertar Pregunta</a></spam>
		<span><a href='creditos.html'>Creditos</a></spam>
	</nav>

    <section class="main" id="s1">
    <div>
		<table border=1> <tr> <th> Direccion </th> <th> Pregunta </th> <th> RespCorrecta </th>
		<th> RespIncorrecta1 </th> <th> RespIncorrecta2 </th> <th> RespIncorrecta3 </th> 
		<th> Complejidad </th> <th> Tema </th>
		</tr>';
		
<?php
include "ParametrosDB0.php";
$mysqli = mysqli_connect($server, $user, $pass, $basededatos);
if (!$mysqli)
{
die ("Fallo al conectar a MySQL: " . mysqli_connect_error());
}
$preguntas = mysqli_query($mysqli, "SELECT * FROM preguntas;" );
	while ($row = mysqli_fetch_array( $preguntas )) {
	echo '<tr><td>' . $row[0] . '</td> <td>' . $row[1] .
	'</td> <td>' . $row[2] .'</td> <td>' . $row[3] .'</td>
	<td>' . $row[4] .'</td> <td>' . $row[5] .'</td>
	<td>' . $row[6] .'</td> <td>' . $row[7] .'</td> 
	</tr>';
	}
	echo '</table>
		</div>
		</section>
		</body>';

$preguntas->close();

mysqli_close($mysqli);
?>