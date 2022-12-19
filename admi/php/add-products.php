<?php
include("conexion.php");

    $Pnombre = $_FILES['file']['name'];
    $Pruta = $_FILES['file']['tmp_name'];
    $Pdestino ="../../uploads/".$Pnombre;

    if($Pnombre != ""){

        if(copy($Pruta,$Pdestino)){

            $iten1 = $_POST['nombre'];
            $iten2 = $_POST['precio'];
            $iten3 = $_POST['estrellas'];
            $iten4 = $_POST['material'];
            $iten5 = $_POST['descripcion'];
            $iten6 = $_POST['stock'];
            
            $insertar = "INSERT INTO  products VALUES (0,'$iten1',$iten2,$iten3,'$iten4','$iten5','$Pnombre',$iten6)";

            $query = mysqli_query($conection, $insertar) or die ("errrorrrrrrrrrrrrrrrrrrr datos");
        }
        else{
            echo "error";
        }
   }
?>