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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4>Men's Fashion T-Shirt</h4>
            <h2>$139.00</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam consequuntur 
                dicta, nam debitis nobis fuga quaerat maxime architecto inventore quidem animi
                assumenda eum nostrum, porro, voluptatibus nisi! Nulla, pariatur quidem! dicta,
                nam debitis nobis fuga quaerat maxime architecto inventore quidem animi
                assumenda eum nostrum, porro, voluptatibus nisi! Nulla, pariatur quidem!</span>
        </div>
    </section>
    
    <section id="product1" class="section-p1">
        <h2>Productos Destacados</h2>
        <p>Colección de Verano con Nuevos Diseños</p>
        <div class="pro-container">
            
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
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

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        } 
    </script>

    <script src="script.js"></script>
</body>
</html>