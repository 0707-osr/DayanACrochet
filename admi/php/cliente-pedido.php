<?php
 include("conexion.php");

 $id=$_GET['id_prod'];
 $id_c=$_GET['id_client'];


 $insertar = "INSERT INTO pedido_guardado VALUES (0,$id_c,$id,now());";

 $query = mysqli_query($conection, $insertar) or die("errrorrrrrrrrrrrrrrrrrrr datos");

 
 //$insertar2 = "INSERT INTO pedido (id_user, id_products,fecha_pedido,estatus_pedido) SELECT id_user, id_products, now(), 1 FROM pedido_guardado where id_user = 4;";

 //$query2 = mysqli_query($conection, $insertar2) or die("errrorrrrrrrrrrrrrrrrrrr datos");

?>