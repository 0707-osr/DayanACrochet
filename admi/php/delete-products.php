<?php
include("conexion.php");

$id=$_GET['cod'];

            $eliminar = "DELETE from products where id='$id' ";
            
            $query = mysqli_query($conection, $eliminar) or die ("existen relaciones");

?>