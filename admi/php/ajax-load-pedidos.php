<?php
include("conexion.php");
session_start();
if (isset($_SESSION['administrador'])) {
} else {
    header("location: ../../bloqueo.html");
    die();
}

$nom = "";
$num = 0;
$dir = "";
$hora = "";
$id=0;
$cont=0;

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
<div id="content-pedidos">
<?php
    $consultap = "SELECT count(pd.id_products) as contador from pedido pd, client c where c.id = pd.id_user and pd.estatus_pedido=1 group by pd.fecha_pedido;";
    $queryp = mysqli_query($conection, $consultap) or die("errrorrrrrrrrrrrrrrrrrrr datos");

    while ($mostrarp = mysqli_fetch_array($queryp)) {
         $cont++;
    }
    ?>
<div class="count" style="width:200px; height:100px; border:1px rgb(211, 211, 211) solid;position:relative">
                <span style="position:Absolute; top:50%;left:50%;transform:translate(-50%,-50%); color:rgb(134, 132, 132"><?php echo $cont?> pendientes</span>
            </div>

    <?php
            $consulta2 = "SELECT concat(c.name,' ',c.last_name) as nombre, pd.fecha_pedido, c.telefono, c.id from pedido pd, client c where c.id = pd.id_user and pd.estatus_pedido = 1 group by pd.fecha_pedido;";

            $query2 = mysqli_query($conection, $consulta2) or die("errrorrrrrrrrrrrrrrrrrrr datos");

            while ($mostrar2 = mysqli_fetch_array($query2)) {
                $nom = $mostrar2[0];
                $hora = $mostrar2[1];
                $tel = $mostrar2[2];
                $id = $mostrar2[3];
            ?>
            
 <form style="width: 50%; margin: auto; margin-bottom: 20px;border:1px rgb(232, 228, 228) solid; height:auto !important">
    <table  class="table">
        <thead style="border: white; background:none !important;">
            <tr>
                <th colspan="2" style="text-align:center;background: #006a47;color:white"><?php echo $nom . " (" . $hora . ")";?></th>
                <th style="width:20px;height:20px;padding:0px;background: rgba(207, 205, 207, 0.972);"><button type="button"  style="background:none;border:none;width:100%;height:100%" onclick="cancelar_pedido(<?php echo $id?>,'<?php echo $hora?>')"><i class="bi bi-x-circle" style="font-size:20px; color: rgb(248, 7, 7)"></i></button></th>

            </tr>

            <tr>
                <th colspan="3" style="text-align:center"><?php echo $tel?></th>
            </tr>
            
            <tr>
                <th>Producto</th>
                <th></th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody style="border: white;">
        <?php
        $consulta3 = "SELECT concat(c.name,' ',c.last_name) as nombre, p.name, p.price from pedido pd inner join client c on pd.id_user=c.id and pd.fecha_pedido = '$hora' inner join products p on pd.id_products=p.id;";

       $query = mysqli_query($conection, $consulta3) or die("3 datos");

            while ($mostrar = mysqli_fetch_array($query)) {

        ?>

         <tr style="height:20px !important">
            <td style="border:none !important"><?php echo $mostrar[1]?></td>
            <td style="border:none !important"></td>
            <td style="border:none !important"><?php echo $mostrar[2]?></td>
         </tr>
<?php }?>
        <tr>
            
            <td></td>
            <td><button type="button" class="btn btn-success" onclick="aceptar_pedido(<?php echo $id?>,'<?php echo $hora?>');">aceptar</button></td>
            <td></td>
        </tr>
        </tbody>
    </table>
 </form>

<?php }?>
       </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <script src="../js/fun-admi.js"></script>
</body>
</html>