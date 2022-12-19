<?php
include('conecction.php');

if(!isset($_SESSION['usuario'])){
    //header($ruta);
    // header("Location: ../../login.php");



    // include('../../login.php');

    
    return;
}



$id = $_GET['id'];

$stmt = "INSERT INTO product_before_buy select * from products where id=".$id;
$query = mysqli_query($conection,$stmt) or die('err');
if($query){
    header("Location: ../../shop.php");
}
else{
    echo "<script>alert('no se pudo eliminar');</script>";
}
