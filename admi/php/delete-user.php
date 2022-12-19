<?php
include("conexion.php");

$id=$_GET['cod'];

            $eliminar = "DELETE from client where id='$id' ";

            $query = mysqli_query($conection, $eliminar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");
    
?>