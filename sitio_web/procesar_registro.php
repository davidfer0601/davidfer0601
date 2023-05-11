<?php
// Conectar a la base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", "usuarios");

// Obtener los datos de registro del formulario
$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Insertar los datos en la tabla correspondiente
mysqli_query($conexion, "INSERT INTO registro (correo,nombre, contraseña) VALUES ('$email','$nombre', '$contrasena')");

// Cerrar la conexión con la base de datos
mysqli_close($conexion);
header("Location: usuario_registrado.html");
exit();
?>