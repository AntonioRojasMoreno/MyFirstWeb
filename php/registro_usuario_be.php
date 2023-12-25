<?php
include 'conexion.php';
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo_electronico = $_POST['Correo_electronico'];
$Nombre_Usuario = $_POST['Nombre_Usuario'];
$Pass = $_POST['Pass'];
//Pass encriptada
$Pass= hash('sha512', $Pass);

$query = "INSERT INTO usuarios(Nombre, Apellido, Correo_electronico, Nombre_Usuario, Pass) 
VALUES ('$Nombre','$Apellido','$Correo_electronico','$Nombre_Usuario','$Pass')";
//Verificación para evitar repeticion de correo en BD
$v_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_electronico='$Correo_electronico' ");
if (mysqli_num_rows($v_correo) > 0) {
   echo '
   <script>
      alert("Correo ya registrado, inténtalo con otra dirección de correo distinta");
      window.location = "../registro.php";
   </script>
   ';
   exit();
   mysqli_close($conexion);
}
//Verificación para evitar repeticion de usuario en BD
$v_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Nombre_Usuario='$Nombre_Usuario' ");
if (mysqli_num_rows($v_usuario) > 0) {
   echo '
   <script>
      alert("Usuario ya registrado, inténtalo con otro nombre de usuario diferente");
      window.location = "../registro.php";
   </script>
';
   exit();
   mysqli_close($conexion);
}




$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
   echo '  <script>
            alert("usuario registrado correctamente");
            window.location= "../index.php";
            </script>';
} else {
   echo '<script>alert("Usuario no almacenado);
    window.location="../index.php";
    </script>';
}
mysqli_close($conexion);
?>