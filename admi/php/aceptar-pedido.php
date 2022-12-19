<?php
 include("conexion.php");

 $id=$_GET['cod'];
 $fecha=$_GET['fecha'];

 $insertar = "UPDATE pedido SET estatus_pedido =3, fecha_pedido=now() WHERE id_user=$id and fecha_pedido='$fecha';";

 $query = mysqli_query($conection, $insertar) or die("errrorrrrrrrrrrrrrrrrrrr datos");
?>