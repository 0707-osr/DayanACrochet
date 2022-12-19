<?php
//error_reporting(0);
session_start();
if (isset($_SESSION['administrador'])) {
} else {
    header("location: ../../formulario/index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMI</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/css/products.css">
  <link rel="stylesheet" href="../assets/css/user.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--datatable!-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
     


  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    
  <link rel="stylesheet" href="../assets/css/demo/style.css">
  <!-- End layout styles -->
  
  <link rel="shortcut icon" href="../../img/logo.png" />
</head>

<body>
  <script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="#" class="brand-logo">
          <img src="../images/logos.png" style="width: 100%;" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" id="iten1">
                <i class="bi bi-person" aria-hidden="true"> &nbsp USUARIOS</i>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" id="iten2">
                <i class="bi bi-bag" aria-hidden="true">&nbsp PRODUCTOS</i>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" id="iten3">
                <i class="bi bi-bag" aria-hidden="true">&nbsp PEDIDOS</i>
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" id="iten4">
                <i class="bi bi-card-checklist" aria-hidden="true">&nbsp ESTADO DE VENTAS</i>
              </a>
            </div>
          </nav>
        </div>
        <div class="profile-actions">
          <a href="../php/cerrar-sesion.php">Logout</a>
        </div>
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:../../partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button
              class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
          </div>

      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper" id="content-body">
 <?php 
 require('../php/ajax-load-user.php');
 ?>
        </main>

      </div>
    </div>
  </div>

  <script>
    $(function () {

          $('#iten1').addClass('top');
      
          $('#table-user').DataTable();
          $('#table-vendidos').DataTable().destroy();
          $('#table-products').DataTable().destroy();
          $('#table-cancelados').DataTable().destroy();

      $('#iten1').click(function () { 
        $.ajax({
        url:'./user.php',   
        beforeSend:function(){
          $('#content-body').html("cargando...");
          $('#iten1').addClass('top');
        $('#iten2').removeClass('top');
        $('#iten3').removeClass('top');
        $('#iten4').removeClass('top');
        $('#iten5').removeClass('top');
        },
        success:function(data){
          $('#content-body').html(data);

          $('#table-vendidos').DataTable().destroy();
          $('#table-products').DataTable().destroy();
          $('#table-cancelados').DataTable().destroy();
          $('#table-user').DataTable();
        }
       });
      });

      $('#iten2').click(function () {
        
        $.ajax({
        url:'./products.php',   
        beforeSend:function(){
          $('#content-body').html("cargando...");
        $('#iten2').addClass('top');
        $('#iten1').removeClass('top');
        $('#iten3').removeClass('top');
        $('#iten4').removeClass('top');
        $('#iten5').removeClass('top');
        },
        success:function(data){
          $('#content-body').html(data);
          
          $('#table-vendidos').DataTable().destroy();
          $('#table-cancelados').DataTable().destroy();
          $('#table-user').DataTable().destroy();
          $('#table-products').DataTable();
        }
       });
      
      });
      $('#iten3').click(function () {

        $.ajax({
        url:'./pedidos.php',   
        beforeSend:function(){
          $('#content-body').html("cargando...");
          $('#iten3').addClass('top');
        $('#iten1').removeClass('top');
        $('#iten2').removeClass('top');
        $('#iten4').removeClass('top');
        $('#iten5').removeClass('top');
        },
        success:function(data){
          $('#content-body').html(data);

          $('#table-user').DataTable().destroy();
          $('#table-cancelados').DataTable().destroy();
          $('#table-products').DataTable().destroy();
          $('#table-vendidos').DataTable().destroy();
          
        }

       });
      });

      $('#iten4').click(function () {
       
        $.ajax({
        url:'./estado_pedido.php',   
        beforeSend:function(){
          $('#content-body').html("cargando...");
          $('#iten4').addClass('top');
        $('#iten1').removeClass('top');
        $('#iten2').removeClass('top');
        $('#iten3').removeClass('top');
        $('#iten5').removeClass('top');
        },
        success:function(data){
          $('#content-body').html(data);


          $('#table-user').DataTable().destroy();
          $('#table-products').DataTable().destroy();
          $('#table-cancelados').DataTable();
          $('#table-vendidos').DataTable();
        }

       });

      });

    })
  </script>


  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="../assets/js/material.js"></script>
  <script src="../assets/js/misc.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>

</body>

</html>