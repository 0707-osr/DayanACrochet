<?php
//error_reporting(0);
/*session_start();
if (isset($_SESSION['cliente_id'])) {
} else {
    header("location: ./bloqueo.html");
    die();
}*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logos.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Inicio</a></li>
                <li><a href="shop.php">Tienda</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <li><a href="./admi/php/cerrar-sesion.php">Cerrar</a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h2>Grandes Ofertas</h2>
        <h1>En todos Nuestros</h1>
        <h1>Productos</h1>
    </section>

    

<?php require('query/products/list-prod-destacados.php'); ?>

    <section id="banner" class="section-m1">
        
    </section>


<?php require('query/products/recently-added-product.php'); ?>


<section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>¡Ofertas de Locura!</h4>
            <h2>Compra 1 y obtèn 1 llavero</h2>
            <span>Las mejores carteras clásicas están a la venta en DayanA Crochet</span>
        </div>
        <div class="banner-box banner-box2">
            <h4>Otoño/Invierno</h4>
            <h2>Proxima Temporada</h2>
            <span>Lo mejor de Chalinas y Guantes Tejidos en DayanA Crochet</span>
        </div>
    </section>

<?php require('footer.php'); ?>

    <script src="script.js"></script>
</body>
</html>