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
echo $sql;
if (!mysqli_query($mysqli ,$sql))
{
die('Error: ' . mysqli_error($mysqli));
}
echo "1 record added";
echo "<p> <a href='verDatos.php'> Ver registros </a>";

mysqli_close($mysqli);
?>