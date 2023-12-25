<?php
session_start();
include 'conexion.php';
$correo = $_POST['email'];
$pass = $_POST['pwd'];
//Pass encriptada
$pass = hash('sha512', $pass);

//validamos login
$v_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
Correo_electronico = '$correo' and Pass = '$pass'");

if (mysqli_num_rows($v_login) > 0) {
    $_SESSION['Nombre_Usuario']=$correo;
    header("location: carrito/articulos.php");
} else {
    echo ('
    <script>
        alert("usuario no encontrado, verifique los datos introducidos");
        window.location="../index.php";
    </script>
    ');
    
}
    exit;
?>