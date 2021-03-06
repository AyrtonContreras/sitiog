<?php
ob_start();
session_start();
if(!isset($_SESSION['obrero'])){
	header("location:login.php");
}
?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SoiWeb</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

              <link href="css/estilos.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <header>
               <div class="contenedor">
   
 <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Bienvenido Administrador</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contacto">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cerrar.php">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
    <section id="about"> 
            <div class="contenido-header">
                <h1 class="titulo-header">Ayrton</h1>
                <span class="linea-header"></span>
                <h2 class="texto-header">Lorem ipsum, dolor sit  <span class="desaparecer">adipisicing elit. Nobis esse odit commodi, ipsa optio quos!</span></h2>
                <a href="" class="action-header">Call to action</a>
            </div>
        </div>
    </section>
    </header>
      <main>
        <section class="quienes">
           <div class="contenedor">
               <h3 class="quienes-titulo">Simple & puro diseño</h3>
               <p class="quienes-parrafo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, quia recusandae dolor cum, eveniet voluptate itaque
                voluptatibus iure perspiciatis sequi quisquam inventore. Necessitatibus quasi voluptatem iusto, ea suscipit blanditiis
                ab architecto, eveniet autem dolore fugiat laborum optio dicta in. Eligendi harum repellendus amet provident placeat quas
                distinctio neque dolores magni!</p>
            </div> 
        </section>
        <section class="quehacemos">
            <div class="contenedor">
                <div class="contenido-cajas">
                    <div class="tarjeta">
                        <img src="img/icono1.png" alt="" class="imagen-tarjeta">
                        <div class="contenido-tarjeta">
                            <h3 class="titulo-tarjeta">Lorem ipsum dolor sit.</h3>
                            <p class="parrafo-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, blanditiis quaerat pariatur minima a veritatis.</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/icono2.png" alt="" class="imagen-tarjeta">
                            <div class="contenido-tarjeta">
                                <h3 class="titulo-tarjeta">Lorem ipsum dolor sit.</h3>
                                <p class="parrafo-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, blanditiis quaerat pariatur minima a veritatis.</p>
                            </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/icono3.png" alt="" class="imagen-tarjeta">
                            <div class="contenido-tarjeta">
                                <h3 class="titulo-tarjeta">Lorem ipsum dolor sit.</h3>
                                <p class="parrafo-tarjeta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, blanditiis quaerat pariatur minima a veritatis.</p>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <div class="portafolio-textos">
                    <h2>Haz de tu trabajo algo extraordinario</h2>
                    <p>Contactame si estás preparado</p>
                </div>
                <section class="galeria">
                    <div class="fotos">
                        <img src="img/1.jpg" alt="">

                    </div>
                     <div class="fotos">
                        <img src="img/2.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/5.jpg" alt="">
                    </div>
                    <div class="fotos">
                        <img src="img/6.jpg" alt="">
                    </div>
                </section>
            </div>
        </section>
    </main>
        <!-- Services section-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio section-->
        <section id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg"
                            ><img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div></a
                        >
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Lorem ipsum dolor sit amet!</h2>
                <a class="btn btn-light btn-xl" href="index.html">Pagina soiweb en Azure.!</a>
            </div>
        </section>
        <!-- Contact section-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                        ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="#">soiweb@gmail.com</a>
                    </div>
                </div>
            </div>
        </section>
        <footer>
        <section class="contacto"   id="contacto">
            <div class="contenedor">
                <div class="footer-textos">
                    <h2>Contacta con nosostros</h2>
                    <p>Lorem, ipsum dolor.</p>
                </div>
                <form action="contact_me.php" class="formulario" method="POST">
                    <input type="text" placeholder="your name "  name="name" required value="">
                    <input type="email" placeholder="Your email *" name="email" required value="" class="email">
                     <input type="text" placeholder="Your Phone *"  name="phone" required value="">
                    <textarea name="message" type="message"  placeholder="Mensaje:"></textarea>
                   <div class="derecha">
                    <input class="boton derecha" type="submit" value="Contactar" name="submmit"><a href="http://www.tufelicidadvacacional.com.ve/email_form.php"></a>
                    </div>
                </form>
            </div>
        </section>
    </footer>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Lorem ipsum dolor sit amet.</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script> 