<?php
include("../php/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--datatable!-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <title>Document</title>
</head>
<body>
<div class="table-responsive">
                <table class="table table-hover"  id="table-products">
                    <thead>
                        <th style="color:white"></th>
                        <th style="color:white">nombre</th>
                        <th style="color:white">material</th>
                        <th style="color:white">precio</th>
                        <th style="color:white">imagen</th>
                        <th style="color:white">stock</th>
                        <th style="color:white">imagen</th>
                    </thead>
                    <tbody>
                    <?php
                $consulta = "SELECT *from products";

                $query = mysqli_query($conection, $consulta) or die ("errrrrrrr");
        
                while($mostrar = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td style="text-align:center; padding-top:30px"><a onclick="delete_products('<?php echo $mostrar[0];?>')"><i class="bi bi-x-circle" style="font-size:25px; color:red"></i></a></td>
                <td style="padding-top:50px"><?php echo $mostrar[1]?></td>
                <td style="padding-top:50px"><?php echo $mostrar[4]?></td>
                <td style="padding-top:50px"><?php echo $mostrar[2]?></td>
                <td><img style="width:130px; height:110px;" src="../../uploads/<?php echo $mostrar[6];?>"></td>
                <td style="padding-top:50px"><?php echo $mostrar[7]?></td>
                <td style="padding-top:50px"><?php echo $mostrar[5]?></td>

            </tr>
    
            <?php 
            }?>
                    </tbody>
                </table>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="../js/fun-admi.js"></script>
<script>
$(document).ready(function() {
$('#table-products').DataTable();
} );
</script>
</body>
</html>