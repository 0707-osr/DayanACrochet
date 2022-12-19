<?php
require('./query/products/conecction.php');
session_start();
$id=0;

if (isset($_SESSION['cliente_id'])) {
    $id=$_SESSION['cliente_id'];
} else {

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
                <li><a class="active" href="contact.php">Contacto</a></li>
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

    <section id="page-header" class="about-header">
        <h2>#Contactanos</h2>

        <p>DEJA UN MENSAJE, ¡Nos encanta saber de ti!</p>
    </section>
        
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>UBICANOS</span>
            <h2>Visite una de las ubicaciones de nuestra agencia o contáctenos hoy</h2>
            <h3>Oficina Central</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Carretera Rompe olas Asociaciòn de Vivienda Oriòn; Pasaje San Juan Grande</p>
                </li>
            </div>
            <div>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>aprildayana15@gmail.com</p>
                </li>
            </div>
            <div>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+51 918 686 685</p>
                </li>
            </div>
            <div>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Lunes a Sabado : 10:00am a 18:00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1671430141125!6m8!1m7!1sV0FW3fzIjGO3nlw316R0fQ!2m2!1d-12.58661301743316!2d-69.19914171801008!3f313.48325181823014!4f5.722709673237944!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form method="post" enctype="multipart/form-data">
            <span>DEJA UN MENSAJE</span>
            <h2>NOS ENCANTA SABER DE TI</h2>
            <textarea id="commit" name="" id="" cols="30" rows="10" placeholder="Mensaje">
            </textarea>
            <button class="normal" onclick="send_commit(<?php echo $id?>);">Submit</button>
        </form>

        <div class="people" style="border: 1px #f6f6f6 solid; height:300px; width:300px; padding:20px;!important; overflow-y: auto !important">
            <div>
                <p>
                    <span style="font-family:'Spartan';">DICEN SOBRE NOSOTROS</span>
                    <?php
                $consulta = "SELECT c.address, f.description, f.date_time from foro f, client c where f.id_client = c.id order by f.date_time desc;";

                $query = mysqli_query($conection, $consulta) or die ("errrrrrrr");
        
                while($mostrar = mysqli_fetch_array($query)){
            ?>
                     <?php echo $mostrar[0]?>
                     <br>
                     <?php echo $mostrar[1]?>
                     <br>
                     <?php echo $mostrar[2]?>
                     <br>
                     <br>
                  
                     
<?php }?>
                </p>
            </div>
            
        </div>
    </section>

    <footer class="section-p1" style="background:#f5f5f5">
        <div class="col">
            <img class="logo" src="img/logos.png" alt="">
            <h4>Contact</h4>
            <p> <strong>Dirección:</strong> Carretera Rompe olas Asociaciòn de Vivienda Oriòn; Pasaje San Juan Grande</p>
            <p><strong>Celular:</strong> +51 918 686 685</p>
            <p><strong>Horas:</strong>10:00 - 18:00, Lunes a Sabado</p>
            <div class="follow">
                <h4>Siguenos</h4>
                <div class="icon">
                    <ul>
                    <li><a href="https://www.facebook.com/DayanA.crochet?mibextid=ZbWKwL" class="fab fa-facebook-f"></a></li>
                    <li><a href="https://instagram.com/dayana.crochet?igshid=MWM2YjBjM2Q=" class="fab fa-instagram"></a></i>
                
                    <ul>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="http://localhost/Webside_Store_Poryect_Web/about.php">¿Quiénes somos?</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/preguntas.php">Preguntas Frecuentes</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/politica.php">Politicas de Privacidad</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/terminos.php">Terminos & Condiciones</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/contact.php">Contáctanos</a>


        <div class="col">
            <h4>Account</h4>
            <a href="http://localhost/Webside_Store_Poryect_Web/formulario/index.php?">Sign In</a>
            
        </div>

      

        <div class="copyright">
            <p>© 2022, Crochet - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="items-cart.js"></script>
</body>
</html>