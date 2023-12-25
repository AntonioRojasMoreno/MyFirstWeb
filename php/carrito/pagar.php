<?php  session_start();
include("../conexion.php");


//Creo referencia de cliente
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$password = "";
for($i=0;$i<5;$i++) {
$password .= substr($str,rand(0,64),1);
}
$ref_cliente = $password;
$fecha_actual = date("Y-m-d");
$query = "INSERT INTO pedido_cliente_cp (ref, fecha)
VALUES ('$ref_cliente','$fecha_actual')";
$result = mysqli_query($conexion,$query);





//Creo referencia del pedido
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$password = "";
for($i=0;$i<5;$i++) {
$password .= substr($str,rand(0,64),1);
}
$ref = $password;





//inserto en pedido_datos

if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    // $_SESSION['carrito']=$carrito_mio;
    }


            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
                if($carrito_mio[$i]!=NULL){
        
                    $cantidad = $carrito_mio[$i]['cantidad'];
                    $articulo = $carrito_mio[$i]['titulo'];
                    $precio = $carrito_mio[$i]['precio'];
                    $total_precio = $precio * $cantidad;
                    $query = "INSERT INTO pedido_datos (ref,cantidad,articulo,precio,total,fecha)
                    VALUES ('$ref', '$cantidad', '$articulo', '$precio', '$total_precio', '$fecha_actual')";
                    $result = mysqli_query($conexion,$query); 
           
            }
            }
            }
            }


       
            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
            if($carrito_mio[$i]!=NULL){ 
            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
            }
            }}}
            if(!isset($total)){$total = '0';}else{ $total = $total;}
            //echo $total; 






//Insertamos en pedido_cp
$ref_user = $ref_cliente;
$estado = 'Falta de pago';
$medio = 'Tarjeta bancaria';
$total_pedido = $total;

$query = "INSERT INTO pedido_cp (ref,cliente,estado,medio,total, fecha)
VALUES ('$ref', '$ref_user', '$estado', '$medio', '$total_pedido','$fecha_actual')";
$result = mysqli_query($conexion,$query);

//vaciamos sesión del carro y recargamos en articulos.php
unset( $_SESSION["carrito"] ); 

header("../../index.php");
echo ('
    <script>
        alert("Pago realizado con éxito");
        window.location="articulos.php";
    </script>
    ');


?>
