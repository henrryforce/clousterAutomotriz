<?php 
session_start();
if(!isset($_SESSION['id_usuario'])){  
  $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/Login.php">Login</a> </li>';
 }else{  
  if($_SESSION['tipoUser'] == '1'){
    $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/PaginaprincipalDeTractoras.php">Cuenta</a> </li>';
  }elseif($_SESSION['tipoUser'] == '2'){
    $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/PaginaprincipalDeProveedores.php">Cuenta</a> </li>';
  }

}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> BAM24/7 </title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">


  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800&family=Encode+Sans+Condensed:wght@400;500;600;700;800&family=Gloria+Hallelujah&family=Kaushan+Script&family=Lobster&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600;700&family=Rajdhani:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;500;700;900&family=Saira+Condensed:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@500;600;700&display=swap"
    rel="stylesheet">

  <link href="css/all.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />

</head>

<body>


  <div class="main-menu-div float-start w-100">
    <div class="top-menu-sction float-start w-100 d-none d-md-none d-lg-block">
      <div class="container">
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col">
            <div class="top-contact-left">
              <ul class="list-unstyled d-flex">
                <li class="ms-4"> <i class="far fa-envelope"></i> info@bam24.com </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="top-contact-right d-flex justify-content-end">
              <ul class="list-unstyled d-flex">
                <li class="ms-3"> <a href="PoliticaDeprivacidad.html"> Terminos-condiciones </a> </li>
              </ul>
              <ul class="list-unstyled ms-4 socal-btn">
                <li>
                  <a href="https://www.facebook.com/clautedomex/"> <i class="fab fa-facebook-f"></i> </a>
                  <a href="https://twitter.com/clautedomex?s=11&t=jkgi23i_1DQyFLRqNnsV_w"> <i
                      class="fab fa-twitter w"></i> </a>
                  <a href="https://instagram.com/clautedomex?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> </a>
                  <a href="https://www.linkedin.com/in/cluster-automotriz-estado-de-m%C3%A9xico-515b1913b"> <i
                      class="fab fa-linkedin"></i> </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>

    </div>

    

    <div class="navication float-start w-100">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <img src="images/LOGO NAVBAR 2.png" class="d-none d-lg-block " alt="logo" />
          </a>
          <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#mboile-show-menu" role="button"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item"> <a class="nav-link" href="index.php"> Inicio</a></li>
              <li class="nav-item"> <a class="nav-link" href="/VistaGeneral_Tractoras.php">Tractoras</a> </li>
              <li class="nav-item"> <a class="nav-link" href="/registrate.php">Registro</a> </li>
              <?php echo $html_cuenta?>
              

            </ul>
          </div>
        </div>
      </nav>
      </nav>
    </div>
  </div>

  <div class="banner-home subpage-banner float-start">
    <div class="banner-content-sec">
      <div class="container">

        <div class="col-lg-8 mx-auto">
          <div class="comon-bedcum">


            </ul>
          </div>


        </div>


      </div>
    </div>

    <div class="video-sec">
      <div class="video-bg"></div>

      <img src="images/LOGIN PROPUESTA.jpg" alt="pb" />


    </div>
  </div>

  <section class="main-body pt-5 float-start industry-pages">





    <!-- CONTENEDOR DEL FORMULARIO-->
    <!-- CONTENEDOR DEL FORMULARIO-->
    <!-- CONTENEDOR DEL FORMULARIO-->
    <!-- CONTENEDOR DEL FORMULARIO-->






    <!-- NOTIFICACIONES-->
    <!-- NOTIFICACIONES-->
    <!-- NOTIFICACIONES-->
    <!-- NOTIFICACIONES-->
    <!-- NOTIFICACIONES-->
    <!-- NOTIFICACIONES-->
    <!-- NOTIFICACIONES-->
    <div class="container">
      <div>
        <div class="conatct-form-div mb-5">
          <h2 class="mb-3 text-center">Registro</h2>
          <h6 class="text-center"> Completa los datos del formulario</h6>

          <div id="notificaciones">

          </div>
          <form action="#" id="formRegistro" name="formRegistro" method="post">


            <div class="mt-4">


              <div class="col-lg-6 mx-auto">
                <input type="text" class="form-control" id="nom_empresa" name="nom_empresa"
                  placeholder="Nombre de la empresa" required>
              </div>
              <div class="col-lg-6 mx-auto">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <!-- CONTRASEÑA CON FUNCIÓN DE MOSTRAR -->
              <div class="col-lg-6 mx-auto">
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script
                  src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
                <input data-toggle="password" class="form-control" type="password" maxlength="20" name="password"
                  placeholder="Contraseña">
              </div>
              <!-- CONFIRMAR CONTRASEÑA -->
              <div class="col-lg-6 mx-auto">
                <input data-toggle="password" class="form-control" type="password" class="form-control" name="password_confirm" placeholder="Confirmar contraseña"
                  required>
              </div>
              <!--CHECKBOX -->
              <div class="col-lg-16 text-lg-center">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="usertype" id="inlineRadio1" value="Tractora">
                  <label class="form-check-label" for="inlineRadio1">Tractora</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="usertype" id="inlineRadio2" value="Proveedor">
                  <label class="form-check-label" for="inlineRadio2">Proveedor</label>
                </div>
              </div>
              <!--BOTON -->
              <div class="col-lg-12 mt-4 text-center">
                <button type="submit" id="btnaceptar" class="btn btn-primary text-center">ACEPTAR</button>
              </div>
              <!--YA TIENES UNA CUENTA? -->
              <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                <p class="d-inline-block mb-0">¿Ya tienes una cuenta?</p>
                <!--SEGUNDA PALABRA -->
                <!--YA TIENES UNA CUENTA? -->
                <a href="Login.php"
                  class="text-dark font-weight-bold text-decoration-none text-decoration-underline">Inicia sesión</a>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer>
    <div class="footer-link-div float-start pt-5">
      <div class="container">
        <div class="row row-cols-2 row-cols-md-2  row-cols-lg-4">
          <div class="col-6">
            <div class="comon-footer-div pt-4">
              <a href="#">
                <img src="images/logo-white.png" alt="logo" />
              </a>
              <h6 class="ft-call"> +52 55 55614048</h6>
              <p class="text-white"> esupplier@clautedomex.mx</p>
            </div>
          </div>
          <div class="col">
            <div class="comon-footer-div pt-4 justify-content-md-end d-grid">
              <h5 class="text-white"></h5>
              <ul class="list-unstyled mt-4">
                <li><a href="https://www.facebook.com/clautedomex/"> <i class="fab fa-facebook-f"></i> Facebook </a>
                </li>
                <li><a href="https://twitter.com/clautedomex?s=11&t=jkgi23i_1DQyFLRqNnsV_w"> <i
                      class="fab fa-twitter w"></i>Twitter </a></li>
                <li><a href="https://instagram.com/clautedomex?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i>
                    Instagram </a></li>
                <li><a href="https://www.linkedin.com/in/cluster-automotriz-estado-de-m%C3%A9xico-515b1913b"> <i
                      class="fab fa-linkedin"></i>linkedin </a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr />
        <div class="d-lg-flex justify-content-between">
          <p class="text-white"> Copyright © 2022</p>
          <div class="link-ft">
            <a href="PoliticaDePrivacidad.html" class="ms-lg-3"> Aviso de privacidad </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- modaible menu -->
  <div class="offcanvas offcanvas-start mobile-menu-div" tabindex="-1" id="mboile-show-menu"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <button type="button" class="close-menu" data-bs-dismiss="offcanvas" aria-label="Close">
        <span> Cerrar </span> <i class="fas fa-long-arrow-alt-right"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <div class="head-contact">
        <a href="index.php" class="logo-side">
          <img src="images/logo-main.png" alt="logo">
        </a>
        <div class="mobile-menu-sec mt-3">
          <ul class="list-unstyled">
          <li>
          <a href="index.php"> Inicio </a>
       </li>

       <li>
          <a href="/VistaGeneral_Tractoras.php"> Tractoras </a>
       </li>

       <li>
          <a href="/registrate.php"> Registro </a>
       </li>

       <li>
          <a href="/Login.php"> Login </a>
       </li>
          </ul>
        </div>
        <!-- REDES SOCIALES - RESPONSIVE -->
        <ul class="side-media list-unstyled">
          <li> <a href="https://www.facebook.com/clautedomex/"> <i class="fab fa-facebook-f"></i> </a>
          <li> <a href="https://twitter.com/clautedomex?s=11&t=jkgi23i_1DQyFLRqNnsV_w"> <i class="fab fa-twitter w"></i>
            </a>
          <li> <a href="https://instagram.com/clautedomex?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> </a>
          <li> <a href="https://www.linkedin.com/in/cluster-automotriz-estado-de-m%C3%A9xico-515b1913b"> <i
                class="fab fa-linkedin"></i> </a>
        </ul>
      </div>
    </div>
  </div>
  <!-- FIN RESPONSIVE -->

  <!-- Back to top button -->
  <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
  </button>
  <!-- END BACK TO TOP BUTTON -->
  <script src="js/app.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.min.js"></script>
  </script>
  <!-- Owl Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 100,
      easing: 'ease',
      delay: 0,
      once: true,
      duration: 800,

    });

  </script>
</body>

</html>