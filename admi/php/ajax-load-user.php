<?php
include("../php/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

<title>Document</title>
</head>
<body>
    <div class="table-responsive">
    <table class="table table-hover" id="table-user">
        <thead>
            <th style="height:auto !important; color:White"></th>
            <th style="height:auto !important; color:White">nombres</th>
            <th style="height:auto !important; color:White">apellidos</th>
            <th style="height:auto !important; color:White">dni</th>
            <th style="height:auto !important; color:White">telefono</th>
            <th style="height:auto !important; color:White">direccion</th>
        </thead>
        <tbody>
        <?php
                $consulta = "SELECT *from client";

                $query = mysqli_query($conection, $consulta) or die ("errrrrrrr");
        
                while($mostrar = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td style="text-align:center; padding-top:30px"><a onclick="delete_users('<?php echo $mostrar[0];?>')"><i class="bi bi-x-circle" style="font-size:25px; color:red"></i></a></td>
                <td><?php echo $mostrar[1]?></td>
                <td><?php echo $mostrar[2]?></td>
                <td><?php echo $mostrar[3]?></td>
                <td><?php echo $mostrar[4]?></td>
                <td><?php echo $mostrar[5]?></td>

            </tr>
    
            <?php 
            }?>
        </tbody>
    </table>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="../js/fun-admi.js"></script>

</body>
</html>