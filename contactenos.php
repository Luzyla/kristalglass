<?php
$nombre_f = $_POST['nombre'];
$apellido_f = $_POST['apellido'];
$correo_f = $_POST['correo'];
$motivo_f = $_POST['motivo'];
$mensaje_f = $_POST['mensaje'];

$datos_bd = mysqli_connect('localhost', 'c2410945','lesamu03PE','c2410945_vanadio')  or exit('No se puede conectar con la base de datos');

mysqli_query($datos_bd, "INSERT INTO consultanos VALUES (DEFAULT, '$nombre_f','$apellido_f', '$correo_f', '$motivo_f', '$mensaje_f')");

mysqli_close($datos_bd);

header('Location: Contacto.php?ok');
?>