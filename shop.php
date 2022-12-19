<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="pagination-style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logos.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Inicio</a></li>
                <li><a class="active" href="shop.php">Tienda</a></li>
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

    <section id="page-header">
        <h2>#Productos</h2>
        <p>Hecho a mano, con mucho amor.</p>
    </section>

<?php include('query/products/list-products.php'); ?>

<section id="newsletter"  class="section-p1 section-m1">
        
    </section>

<?php require('footer.php'); ?>

    <script src="adding-products.js"></script>
    <script src="script.js"></script>
</body>
</html>