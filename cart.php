<?php
session_start();
$id=0;

if (isset($_SESSION['cliente_id'])) {
    $id=$_SESSION['cliente_id'];
} else {
    header("location: ./formulario/index.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logos.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="shop.php">Tienda</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <li><a href="./admi/php/cerrar-sesion.php">Cerrar</a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="page-header" class="about-header">
        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Eliminar</td>
                    <td>Imagen</td>
                    <td>Producto</td>

                    <td>Subtotal</td>
                </tr>
            </thead>  
            <tbody id="rows-cart-storage">
               
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong id="total">$ 335</strong></td>
                </tr>
            </table>
            <button id="btn-send-data-cart" class="normal" onclick="enviar_pedido(<?php echo $id?>);">Pedir</button>
        </div>
    </section>
<?php include('footer.php');?>

    <script src="items-cart.js"></script>
    <script src="script.js"></script>
</body>
</html>