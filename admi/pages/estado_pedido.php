<?php
include("../php/conexion.php");
session_start();
if (isset($_SESSION['administrador'])) {
} else {
    header("location: ../../bloqueo.html");
    die();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="../assets/css/user.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

<title>Document</title>
</head>
<body>
<div>
    <span>cancelados</span>
    <div class="table-responsive">
    <table class="table table-hover" id="table-cancelados">
        <thead>
            <th style="color:white">nombres</th>
            <th style="color:white">apellidos</th>
            <th style="color:white">producto</th>
            <th style="color:white">fecha de cancelacion</th>
            <th style="color:white">telefono</th>
            <th style="color:white">cantidad</th>
        </thead>
        <tbody>
        <?php
                $consulta = "SELECT c.name, c.last_name, p.name, pd.fecha_pedido, c.telefono, count(c.name) as cantidad from pedido pd, client c, products p where pd.id_user = c.id and pd.id_products=p.id and pd.estatus_pedido=2 group by pd.fecha_pedido;";

                $query = mysqli_query($conection, $consulta) or die ("errrrrrrr");
        
                while($mostrar = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $mostrar[0]?></td>
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
    <br>
    <span>vendidos</span>
    <br>
    <div class="table-responsive">
    <table class="table table-hover" id="table-vendidos">
        <thead>
            <th style="color:white">nombres</th>
            <th style="color:white">apellidos</th>
            <th style="color:white">producto</th>
            <th style="color:white">fecha de venta</th>
            <th style="color:white">telefono</th>
            <th style="color:white">cantidad</th>
            <th style="color:white">precio</th>
        </thead>
        <tbody>
        <?php
                $consulta = "SELECT c.name, c.last_name, p.name, pd.fecha_pedido, c.telefono, count(c.name) as cantidad, sum(p.price) as costo from pedido pd, client c, products p where pd.id_user = c.id and pd.id_products=p.id and pd.estatus_pedido=3 group by pd.fecha_pedido;";

                $query = mysqli_query($conection, $consulta) or die ("errrrrrrr");
        
                while($mostrar = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $mostrar[0]?></td>
                <td><?php echo $mostrar[1]?></td>
                <td><?php echo $mostrar[2]?></td>
                <td><?php echo $mostrar[3]?></td>
                <td><?php echo $mostrar[4]?></td>
                <td><?php echo $mostrar[5]?></td>
                <td><?php echo $mostrar[6]?></td>
            </tr>
    
            <?php 
            }?>
        </tbody>
    </table>
    </div>
        </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src="../js/fun-admi.js"></script>
</body>
</html>