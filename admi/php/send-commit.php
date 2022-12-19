<?php
 include("conexion.php");

 $commit=$_GET['commit'];
 $id=$_GET['id'];

 $insertar = "INSERT INTO foro values (0,'$commit',now(),$id)";

 $query = mysqli_query($conection, $insertar) or die("errrorrrrrrrrrrrrrrrrrrr datos");
?>