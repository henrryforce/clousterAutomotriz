<?php 
session_start();
if(!isset($_SESSION['id_usuario'])){
    //header("location: /index.php");
    $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/Login.php">Login</a> </li>';
   }else{  
    if($_SESSION['tipoUser'] == '1'){
      $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/PaginaprincipalDeTractoras.php">Cuenta</a> </li>';
    }elseif($_SESSION['tipoUser'] == '2'){
      $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/PaginaprincipalDeProveedores.php">Cuenta</a> </li>';
    }
  }?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BAM24/7</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    

     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700;800&family=Encode+Sans+Condensed:wght@400;500;600;700;800&family=Gloria+Hallelujah&family=Kaushan+Script&family=Lobster&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Open+Sans:wght@300;400;500;600;700&family=Quicksand:wght@400;500;600;700&family=Rajdhani:wght@300;400;500;600;700&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@300;400;500;700;900&family=Saira+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
   
  </head>

<body>
  <div class="main-menu-div float-start w-100">
    <div class="top-menu-sction float-start w-100 d-none d-md-none d-lg-block">
        <div class="container">
             <div class="row row-cols-1 row-cols-lg-2">
               <div class="col">
                 <div class="top-contact-left">
                   <ul class="list-unstyled d-flex">
                     <li class="ms-4"> <i class="far fa-envelope"></i> esupplier@clautedomex.mx </li>
                   </ul></div> </div>
               <div class="col">
                 <div class="top-contact-right d-flex justify-content-end">
                  <ul class="list-unstyled d-flex">
                     <li class="ms-3"> <a href="PoliticaDeprivacidad.html"> Terminos-condiciones </a>  </li>
                  </ul>
                   <ul class="list-unstyled ms-4 socal-btn">
                     <li>
                       <a href="https://www.facebook.com/clautedomex/"> <i class="fab fa-facebook-f"></i> </a>
                       <a href="https://twitter.com/clautedomex?s=11&t=jkgi23i_1DQyFLRqNnsV_w"> <i class="fab fa-twitter w"></i> </a>
                       <a href="https://instagram.com/clautedomex?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> </a>
						   <a href="https://www.linkedin.com/in/cluster-automotriz-estado-de-m%C3%A9xico-515b1913b"> <i class="fab fa-linkedin"></i> </a>
                     </li> </ul> </div></div></div></div></div>





      <!-- NAVBAR INICIO -->
      <!-- NAVBAR INICIO -->
      <!-- NAVBAR INICIO -->


    <div class="navication float-start w-100">
     <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
         <a class="navbar-brand" href="index.php">
            <!-- IMAGEN DEL LOGO -->
            <!-- IMAGEN DEL LOGO -->
            <!-- IMAGEN DEL LOGO -->
            <!-- IMAGEN DEL LOGO -->

            <img src="images/LOGO NAVBAR 2.png" class="d-none d-lg-block " alt="logo"/>
            
         </a>
         <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#mboile-show-menu" role="button" aria-controls="offcanvasExample">
           <span class="navbar-toggler-icon"></span>
         </a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


            
            <li class="nav-item"> <a class="nav-link active" href="index.php"> Inicio</a></li>
            <li class="nav-item"> <a class="nav-link" href="/VistaGeneral_Tractoras.php">Tractoras</a> </li>
			   <li class="nav-item"> <a class="nav-link" href="/registrate.php">Registro</a> </li>
			   <?php echo $html_cuenta ?>
			   
             
           </ul>
            </div> </div> </nav> </nav> </div></div> 
                        
      <!-- NAVBAR FIN -->
      <!-- NAVBAR FIN -->
      <!-- NAVBAR FIN -->        

 <div class="banner-home float-start">
     <div class="banner-content-sec">
        <div class="container">




         
         
              <div class="col-lg-8">
                <h1 data-aos="fade-down">Innovación digital en pro del Sector Automotriz </h1>
                <p class="mt-3" data-aos="fade-up">Todo lo que necesitas para sumarte al sector automotriz. </p>
			    <img src="images/bam.png" alt=""/> <br><br>
				  <div style="padding-left: 40px;">	  <a href="/registrate.php" class="btn read-more" data-aos="fade-down"> <span> Regístrate <i class="fas fa-angle-right"></i> </span> </a>  
                <a href="contact.html" class="btn contact-btn ms-3" data-aos="fade-down"> <span> <i class="far fa-paper-plane"></i> Contacto </span> </a></div>
              </div>
        </div></div>
     
    <div class="video-sec">
      <div class="video-bg"></div>
        <video src="images/Untitled.mp4" muted autoplay loop playsinline></video>
    </div></div>
 
 <section class="main-body pt-5 float-start">

	  <div class="about-home" style="padding: 30px 0 ">
         <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-lg-5" >
               <div class="col">
                  <figure class="d-grid justify-content-center"data-aos="fade-right">
                     <img src="images/ab-pic.png" alt="ab-pic" height="555"/>
                  </figure>

               </div>
               <div class="col">
                  <h2 data-aos="fade-down"> El punto de encuentro entre compradores y proveedores </h2>
                  <p data-aos="fade-down" align="justify"> Nueva herramienta digital que pone a tu alcance el potencial de los encuentros de negocios presenciales, ahora en formato digital, disponible en todo momento. </p>
                  <ul class="list-unstyled mt-4"data-aos="fade-up">
                    <li class="d-flex">
                       <figure class="icon">
                          <img src="images/3233497.png"/>
                       </figure>
                       <div class="content-cm ps-3">
                          <h5> Ingresa</h5> </div> </li>
                    <li class="d-flex">
                      <figure class="icon">
                         <img src="images/1436588.png"/>
                      </figure>
                      <div class="content-cm ps-3">
                         <h5> Regístrate</h5> </div> </li>
                   <li class="d-flex">
                    <figure class="icon">
                       <img src="images/419952.png"/>
                    </figure>
                    <div class="content-cm ps-3">
                       <h5> Encuentra oportunidades de <BR>negocios entre empresas certificadas</h5>
                    </div>   </li> </ul>   </div> </div> </div>   </div>
	 
	 
	 
	 <div class="clients-div-home py-5 position-relative float-start w-100">
        <div class="container">
          
           <div class="heading-one">
            <h1> Tractoras </h1>
            <h2 class="text-center aos-init aos-animate" style="color: white" data-aos="fade-up"> Empresas tractoras </h2>
          </div>
          <div class="client-slide owl-carousel owl-theme">
            <div class="clients bg-white shadow text-center px-5 py-3 " >
              <figure class="mb-0">
                 <img src="images/client-dark-01.jpg" alt="clents"></figure></div>

            <div class="clients bg-white shadow text-center px-5 py-3 " >
              <figure class="mb-0">
                 <img src="images/client-dark-02.jpg" alt="clents"> </figure>  </div>

            <div class="clients bg-white shadow text-center px-5 py-3" >
              <figure class="mb-0">
                 <img src="images/client-dark-06.jpg" alt="clents"> </figure></div>
           
            <div class="clients bg-white shadow text-center px-5 py-3 ">
               <figure class="mb-0">
                  <img src="images/client-dark-04.jpg" alt="clents"></figure></div>
         
            <div class="clients bg-white shadow text-center px-5 py-3">
              <figure class="mb-0">
                 <img src="images/client-dark-05.jpg" alt="clents"> </figure></div>

           <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-06.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-07.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-08.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-09.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-10.jpg" alt="clents"> </figure></div>
			  
			  <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-11.jpg" alt="clents"> </figure></div>
			  
			   <div class="clients bg-white shadow text-center px-5 py-3 " >
              <figure class="mb-0">
                 <img src="images/client-dark-12.jpg" alt="clents"></figure></div>

            <div class="clients bg-white shadow text-center px-5 py-3 " >
              <figure class="mb-0">
                 <img src="images/client-dark-13.jpg" alt="clents"> </figure>  </div>
          </div>
		 
		 <div class="client-slide owl-carousel owl-theme">
            <div class="clients bg-white shadow text-center px-5 py-3" >
              <figure class="mb-0">
                 <img src="images/client-dark-14.jpg" alt="clents"> </figure></div>
           
            <div class="clients bg-white shadow text-center px-5 py-3 ">
               <figure class="mb-0">
                  <img src="images/client-dark-15.jpg" alt="clents"></figure></div>
         
            <div class="clients bg-white shadow text-center px-5 py-3">
              <figure class="mb-0">
                 <img src="images/client-dark-16.jpg" alt="clents"> </figure></div>

           <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-17.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-18.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-19.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-20.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-21.jpg" alt="clents"> </figure></div>
			 
			     <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-22.jpg" alt="clents"> </figure></div>
			 
			  <div class="clients bg-white shadow text-center px-5 py-3 " >
              <figure class="mb-0">
                 <img src="images/client-dark-23.jpg" alt="clents"></figure></div>

            <div class="clients bg-white shadow text-center px-5 py-3 " >
              <figure class="mb-0">
                 <img src="images/client-dark-24.jpg" alt="clents"> </figure>  </div>

            <div class="clients bg-white shadow text-center px-5 py-3" >
              <figure class="mb-0">
                 <img src="images/client-dark-25.jpg" alt="clents"> </figure></div>
           
            <div class="clients bg-white shadow text-center px-5 py-3 ">
               <figure class="mb-0">
                  <img src="images/client-dark-26.jpg" alt="clents"></figure></div>
          </div>
			
			<div class="client-slide owl-carousel owl-theme">
            <div class="clients bg-white shadow text-center px-5 py-3">
              <figure class="mb-0">
                 <img src="images/client-dark-27.jpg" alt="clents"> </figure></div>

           <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-28.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-29.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-30.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-31.jpg" alt="clents"> </figure></div>
			  
			       <div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-32.jpg" alt="clents"> </figure></div>
				
				<div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-33.jpg" alt="clents"> </figure></div>
				
				<div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-34.jpg" alt="clents"> </figure></div>
				
				<div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-35.jpg" alt="clents"> </figure></div>
				
				<div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-36.jpg" alt="clents"> </figure></div>
				
				<div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-37.jpg" alt="clents"> </figure></div>
				<div class="clients bg-white shadow text-center px-5 py-3" >
            <figure class="mb-0">
               <img src="images/client-dark-38.jpg" alt="clents"> </figure></div>
          </div>
		 </div></div>

	 
      <div class="get-started-div">
         <div class="container">
            <div class="row row-cols-1 row-cols-3">
                <div class="col">
                   <div class="comon-stage-1">                   
                   </div>  </div> </div> </div> </div>
                 
	 <div class="contact-div-home">
         <div class="container mb-5">
            <h2 class="text-white text-center mb-5" data-aos="fade-up">Herramienta digital integrada o   <br/>
             conformada por compradores líderes de la industria.</h2> </div>
      </div>
	 
	 <div class="home-top-services" >
         <div class="container">
            <div class="inside-part bg-white shadow" style="background-color: #f5ad0d" >
              <div class="row row-cols-1 row-cols-lg-3">
                <div class="col-6" >
                  <div class="top-services text-center"  data-aos="fade-down">
                       <figure class="m-auto d-table">
                          <img src="images/5046529.png" alt="icon1"/>
                       </figure>
                      <h5>VENTAJAS DE PERTENECER AL PROGRAMA DE LOCALIZACIÓN DE PROVEEDORES 24/7</h5>
                      <div class="bg-img-div2">
                         <img src="images/bg-color.png" alt="new-bg"/>
                      </div> </div>  </div>  
				  
                <div class="col-6">
                  <div class="top-services text-center" data-aos="fade-up">
                      <figure class="m-auto d-table">
                        <img src="images/1133743.png"alt="icon1"/>
                    </figure>
                    
                      <h5>VALOR AGREGADO SOCIO CLAUTEDOMEX  </h5>
                      <p> Todos nuestros socios tienen acceso total a esta nueva herramienta potencial.</p>
                      <div class="bg-img-div2">
                        <img src="" alt="new-bg"/>
                      </div></div> </div> </div></div> </div></div>
                  
 
	 <div class="texttimonial-sec-div py-5">
        <div class="container">
          <div class="heading-one">
            <h6 class="text-center" data-aos="fade-down">  </h6>
            <h2 class="text-center" data-aos="fade-up">  PROGRAMA DE LOCALIZACIÓN DE PROVEEDORES  24/7 </h2>
           <p align="center" style="font-size: 30px;color: white">  Innovación digital en pro del Sector Automotriz.<br>
El punto de encuentro entre compradores y proveedores. </p>
          </div>
          <div class="testimonial-slider" data-aos="fade-down">
             <div class="testimonial-slide owl-carousel owl-theme">
             </div></div></div> </div>
			  
			  <div class="why-choose-us-div py-5">
         <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 g-lg-5 align-items-center">
                <div class="col">
                  <h2 class="min-head" data-aos="fade-up"> ¿Qué somos? </h2>
                   <p>&nbsp;</p>
                   
<p align="justify" data-aos="fade-down">
            El  Know How y Expertise de 8 años desarrollando proveeduría en encuentros de negocios en nuestro evento lider BAM, ahora se trasladan a una plataforma 100% Digital disponible 24/7 con la misma confiabilidad y efectividad demostrada en citas presenciales. <br>
           <br> El programa de localización de proveedores 24/7,   es un motor de localización empresas estratégicas y  calificadas para abastecer la manufactura automotriz. </p>
                </div>

                
                <div class="col"data-aos="fade-left">
                         <div> <img src="images/imagen.jpg" alt=""/> </div>   
                       </div>
			 </div></div></div>
    
			  
			  <div class="main-services py-5">
         <div class="container">
           <div class="heading-one">
              
              <h1> Integración </h1>
              <h2 class="text-center" data-aos="fade-up" style="color: #00386e">Integración estratégica</h2>
			   <p class="mt-5 mb-4" style="color: black">Diseñamos un ecosistema de oportunidades de negocios en donde se conjunta el ClautEdoMex, empresas tractoras, proveedores y organizaciones Internacionales. </p>
           </div>
           <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-lg-5">
              <div class="col" >
                 <div class="comon-services p-5" data-aos="fade-down" style="background-color:#184a87">
                   <span class="d-block">
                    <figure> <img src="images/1133743.png" alt="icon"/> </figure>
                    <h5> ClautEdoMex </h5>
                    <p align="justify">Atraemos, seleccionamos y filtramos perfiles adecuados para generar oportunidades de negocio entre tractoras y proveedores que cumplan con certificaciones y lineamientos que requiere la industria de acuerdo a estándares internacionales.</p>
                   </span>
                   
                 </div>
              </div>
              <div class="col">
                <div class="comon-services p-5" data-aos="fade-up" style="background-color:#43738d">
                  <span class="d-block">
                  <figure> <img src="images/1227874.png" alt="icon"/> </figure>
                   <h5>Tractoras </h5>
                   <p align="justify">Empresas internacionales del sector automotriz con actividades  de manufactura en  México en busca de proveedores de su cadena de valor.  </p>
                  </span>
                </div>
              </div>
              
              <div class="col">
                <div class="comon-services p-5" data-aos="fade-up" style="background-color:#43738d">
                  <span class="d-block">
                    <figure> <img src="images/3327420.png" alt="icon"/> </figure>
                    <h5>Proveedores  </h5>
                    <p align="justify">Fabricantes de elementos automotrices de la Cadena de Suministro, Materias Primas, Commodities, Partes y Componentes, Materiales Indirectos y Directos; todos asesorados y filtrados con objetivo de cumplir los estándares requeridos por las empresas tractoras en el ámbito de certificaciones, niveles de calidad y tiempos de entrega. </p>
                  </span>
                </div>
              </div>
              <div class="col">
                <div class="comon-services p-5" data-aos="fade-down" style="background-color:#184a87">
                  <span class="d-block">
                  <figure> <img src="images/3671262.png" alt="icon"/> </figure>
                   <h5>Organizaciones Internacionales </h5>
                   <p align="justify">Integramos a nuestras mesas de trabajo a cámaras empresariales y organizaciones internacionales con el objetivo de proporcionar información de valor y tendencias, que nos permita  articular de manera ágil y eficiente la  vinculación estratégica  que deriva en mayores oportunidades de negocio. </p>
                  </span></div></div></div> </div></div>
                
	 
	</div> 

   <!-- HOW IT WORKS -->
   <!-- INDUSTRIA AUTOMOTRIZ -->
  
   <div class="how-it-work py-5 mt-5">
      <div class="container">
          <div class="heading-one">
            <h6 class="text-center text-white" data-aos="fade-down">  </h6>
            <p class="text-center text-white mb-5 mb-md-5 mb-xl-0" data-aos="fade-down" style="font-size: 40px">México en la industria automotriz es:</p>
          </div>
          
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-lg-5 mt-0 justify-content-between">
              <div class="col">
                  <div class="comon-div1m" data-aos="fade-down">
                       <figure>  <img src="images/Trofeo.png" alt="pic"/></figure>
                       <h5>Principal proveedor de EEUU de autopartes.</h5></div> </div>
              <div class="col">
                <div class="comon-div1m" data-aos="fade-up">
                     <figure><img src="images/3639333.png" alt="pic"/></figure>
                     <h5>Es el cuarto mayor exportador de autopartes. </h5> </div></div>
              <div class="col">
                <div class="comon-div1m" data-aos="fade-down">
                     <figure> <img src="images/1988988.png" alt="pic"/></figure>
                     <h5>+2000 empresas productoras de autopartes en el pais.</h5></div></div>     
              <div class="col">
                <div class="comon-div1m" data-aos="fade-up">
                     <figure>
                        <img src="images/Ingeniero.png" alt="pic"/></figure>
                      <h5>26 centro de investigación y desarrollo, con mas de 15 mil ingenieros. </h5></div></div>
          </div>

          <!-- SEGUNDA FILA -->
          <!-- SEGUNDA FILA -->
          <!-- SEGUNDA FILA -->


          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-lg-5 mt-0 justify-content-between">
           <div class="col">
               <div class="comon-div1m" data-aos="fade-down">
                    <figure>  <img src="images/Engranes.png" alt="pic"/></figure>
                    <h5>+2 millones de empleos generados por el Sector Automotor.</h5></div> </div>
           <div class="col">
             <div class="comon-div1m" data-aos="fade-up">
                  <figure><img src="images/Truck.png" alt="pic"/></figure>
                  <h5>7º Productor de vehículos ligeros. </h5> </div></div>
           <div class="col">
             <div class="comon-div1m" data-aos="fade-down">
                  <figure> <img src="images/598827.png" alt="pic"/></figure>
                  <h5>4º Exportador de vehículos ligeros, carga y pasaje.</h5></div></div>     
           <div class="col">
             <div class="comon-div1m" data-aos="fade-up">
                  <figure>
                     <img src="images/Carga truck.png" alt="pic"/></figure>
                   <h5>4º Productor de vehículos de carga. </h5></div></div>
       </div>



               <!-- TERCER FILA -->
               <!-- TERCER FILA -->

               <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-lg-5 mt-0 justify-content-center">
                  <div class="col">
                      <div class="comon-div1m" data-aos="fade-down">
                           <figure>  <img src="images/Truck 2.png" alt="pic"/></figure>
                           <h5>1º Exportador de tractocamiones.</h5></div> </div>

                 
                  <div class="col">
                    <div class="comon-div1m" data-aos="fade-down">
                         <figure> <img src="images/3671262.png" alt="pic"/></figure>
                         <h5>1º Generador de inversión Extranjera Directa en México.</h5></div></div>    

                  
              </div>

      </div>
  </div>

  <!-- HOW IT WORKS END -->
  <!-- HOW IT WORKS END -->
  <!-- HOW IT WORKS END -->

	 
         <div class="our-spality py-5 position-relative">
         <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-lg-5">
               <div class="col">
                  <a href="#" class="comon-projects position-relative" data-aos="fade-down">
                     <figure>
                       <img src="images/BusinessTeam.jpg" alt="project"/>
                     </figure>
                     <div class="content-projects" data-aos="fade-up">
                        <h5> Nuestra herramienta...</h5>
                        <hr/>
                        <p>Nuestra herramienta pone a tu empresa en el mapa de oportunidades de negocio </p>
                     </div>
                  </a>
               </div>
               <div class="col" >
                <a href="#" class="comon-projects position-relative" data-aos="fade-up">
                   <figure>
                     <img src="images/PROOVEDORES2.jpg" alt="project"/>
                   </figure>
                   <div class="content-projects">
                      <h5> Miles de transacciones... </h5>
                      <hr/>
                      <p> Miles de transacciones se realizan todos los días en el sector automotriz</p>
                   </div>
                </a>
               </div>
            </div>  




         </div>
      </div>

      <!-- get quote -->

      <div class="contact-div-home">
         <div class="container">
           <h5 class="text-center" data-aos="fade-down"> Todo lo que necesitas para sumarte al sector automotriz.<br>
Programa de Localización de proveedores 24/7 te ubica en el mapa de oportunidades.
</h5>
            <h2 class="text-white text-center" data-aos="fade-up">GENERA NUEVAS OPORTUNIDADES DE NEGOCIO</h2>
         <p align="center" style="color: white"> Ingresa, regístrate y encuentra oportunidades de negocios entre empresas certificadas.</p>
            <a href="registrate.php" class="btn started-btn" data-aos="fade-down"> Comienza ahora <i class="far fa-paper-plane"></i> </a><br>
			 <h3 align="center" style="color: white">Socio ClautEdoMex  Valor membresía</h3>
         </div></div> </div>    
 </section>



 <!-- FOOTER -->
 <!-- FOOTER -->
 <!-- FOOTER -->
 <!-- FOOTER -->


 <footer>
    
    <div class="subsribe-section" id="seccioncostos">
       <div class="container">
          <div class="inside-part-footer float-start">
             <div class="d-lg-flex align-items-center">
                 <div class="col-lg-7">
                  <h2 data-aos="fade-down"> Inversión $5,000 más IVA bimestral </h2>
                 </div>
                 <div class="col-lg-5">
                    <a href="registrate.php" class="btn started-btn" data-aos="fade-down"> Registro</a>
                 </div></div></div> </div> </div>

    <div class="footer-link-div float-start pt-5">
        <div class="container">
           <div class="row row-cols-2 row-cols-md-2  row-cols-lg-4">
              <div class="col-6">
                 <div class="comon-footer-div pt-4">
                     <a href="#">
                        <img src="images/logo-white.png" alt="logo"/>
                     </a>
                    <h6 class="ft-call"> +52 55 55614048</h6>
                    <p class="text-white">  esupplier@clautedomex.mx</p>
                 </div></div>
              <div class="col">
                <div class="comon-footer-div pt-4 justify-content-md-end d-grid">
                    <h5 class="text-white"></h5>
                    <ul class="list-unstyled mt-4">

                      <li><a href="https://www.facebook.com/clautedomex/"> <i class="fab fa-facebook-f"></i> Facebook </a></li>
                      <li><a href="https://twitter.com/clautedomex?s=11&t=jkgi23i_1DQyFLRqNnsV_w"> <i class="fab fa-twitter w"></i>Twitter </a></li>
                      <li><a href="https://instagram.com/clautedomex?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> Instagram </a></li> 
                      <li><a href="https://www.linkedin.com/in/cluster-automotriz-estado-de-m%C3%A9xico-515b1913b"> <i class="fab fa-linkedin"></i>linkedin </a></li>
                      
                     </ul></div>  </div></div>             
           <hr/>
            <div class="d-lg-flex justify-content-between">
              <p class="text-white"> Copyright © 2022</p>
              <div class="link-ft">
                 <a href="PoliticaDePrivacidad.html" class="ms-lg-3"> Aviso de privacidad </a>
              </div> </div> </div></div>
 </footer>

 <!-- modaible menu -->

 <div class="offcanvas offcanvas-start mobile-menu-div" tabindex="-1" id="mboile-show-menu" aria-labelledby="offcanvasExampleLabel">
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
          <li> <a href="https://twitter.com/clautedomex?s=11&t=jkgi23i_1DQyFLRqNnsV_w"> <i class="fab fa-twitter w"></i> </a>
          <li> <a href="https://instagram.com/clautedomex?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> </a>
          <li> <a href="https://www.linkedin.com/in/cluster-automotriz-estado-de-m%C3%A9xico-515b1913b"> <i class="fab fa-linkedin"></i> </a>
       </ul>
     </div>
   </div>
 </div>
 
 <!-- FIN RESPONSIVE -->
 <!-- FIN RESPONSIVE -->

<!-- Back to top button -->
<!-- Back to top button -->
<!-- Back to top button -->
<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

<!-- END BACK TO TOP BUTTON -->






<script src="js/bootstrap.bundle.min.js" ></script>
<script src="js/jquery.min.js" ></script>
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
