<?php
session_start();
if(!isset($_SESSION['id_usuario'])){
  header("location: /Login.php");
 }else{
  $id_usr=$_SESSION['id_usuario'];
  if($_SESSION['tipoUser'] != '1'){
    header("location: /Login.php");
  }
}
if(!isset($_SESSION['id_usuario'])){
  //header("location: /index.php");
  $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/Login.php">Login</a> </li>';
 }else{  
  if($_SESSION['tipoUser'] == '1'){
    $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/PaginaprincipalDeTractoras.php">Cuenta</a> </li>';
  }elseif($_SESSION['tipoUser'] == '2'){
    $html_cuenta = '<li class="nav-item"> <a class="nav-link" href="/PaginaprincipalDeProveedores.php">Cuenta</a> </li>';
  }
}
  include_once "php/Conexion.php";
  require_once "php/addContactos.php";
  require_once "php/addContactosT.php";
  require_once "php/addProducts.php";
  require_once "php/addRequ.php";
  $database=new Conexion;
  $obj=new Conexion;
  $obj -> query("SELECT  `Logo` FROM `archivos` WHERE `ID_archivo` = $id_usr");
  $res= $obj -> resultSet();
  ?>


<!doctype html>
<html lang="es">
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
  <script type="text/javascript"> 
    function mostrarEditar() {
      //document.getElementById("tabEditar").style.display = "block";
      $('#tabEditar').removeAttr('style');
      $('#tabEditar').show();
    }
    function ocultarEditar(){
      document.getElementById("tabEditar").style.display = "none";
    }
  </script>
<body>
  <div class="main-menu-div float-start w-100">
    <div class="top-menu-sction float-start w-100 d-none d-md-none d-lg-block">      
        <div class="container">
             <div class="row row-cols-1 row-cols-lg-2">
               <div class="col">
                 <div class="top-contact-left">
                   <ul class="list-unstyled d-flex">
                     <li class="ms-4"> <i class="far fa-envelope"></i> info@bam24.com </li>
                   </ul></div> </div>
               <div class="col">
                 <div class="top-contact-right d-flex justify-content-end">
                   <ul class="list-unstyled d-flex">
                     <li class="ms-3"> <a href="PoliticaDeprivacidad.html"> Terminos-condiciones </a>  </li>
                   </ul>
                   <ul class="list-unstyled ms-4 socal-btn">
                     <li>
                       <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                       <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
                       <a href="#"> <i class="fab fa-instagram"></i> </a>
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
             <img src="images/logo-white.png" class="d-none d-lg-block " alt="logo"/>
             <img src="images/logo-main.png" class="d-block d-md-block d-lg-none" alt="logo"/>
          </a>
          <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#mboile-show-menu" role="button" aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  
              
            <li class="nav-item"> <a class="nav-link" href="index.php"> Inicio</a></li>
            <li class="nav-item"> <a class="nav-link" href="/VistaGeneral_Tractoras.php">Tractoras</a> </li>
            <li class="nav-item"> <a class="nav-link" href="/registrate.php">Registro</a> </li>
            <?php echo $html_cuenta ?>
            
            
            
            <li class="nav-item accordion-item"> <a class="nav-link logout"  href="#">Cerrar sesión</a> </li>



            

             </li></ul>
             </div> </div> </nav> </nav> </div></div>  

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
       <img src="images/PROOVEDORES2.jpg" alt="pb"/>        
    </div>
 </div>

 <section class="main-body pt-5 float-start industry-pages">
                <!--------------------------------- CONTENEDOR DE ELEMENTOS --------------------------------->
                <!--------------------------------- COLOCAR CONTENIDO AQUÍ --------------------------------->           
                <!--------------------------------- UP BAR BUTTONS --------------------------------->
                <div class="container">
                <div class="card mt-5">
                  <div class="card-body">


                <div class="profile-userbuttons text-center mb-4">
                    <button type="button" class="btn btn-primary" id="btnAdministrarcuenta">Administrar Perfil</button>
                    <a type="button" class="btn btn-primary" href="/Busquedaproveedores.php">Lista de proveedores</a>
                </div>
                <!-- ROW(->) COL(v)-->                                    
                <!-- LOGO Y NOMBRE DE LA MARCA-->
                <div class="container mb-4">                    
                    <section class="Profile-header text-center">
                        <div>
                            <!-- IMAGEN Y DIMENSIONES DE LA MISMA-->                            
                            <img src="<?php echo (isset($res[0]['Logo'])) ?  './php/'.$res[0]['Logo'] : './php/archivosUpload/logos/default.png'; ?>" alt="profile" class="img-rounded mb-3" width="230" height="120">
                        </div>                        
                        <?php 
                          $obj->query("SELECT usuario.ID_empresa, empresa.Empresa
                                            FROM usuario
                                            INNER JOIN empresa ON  usuario.ID_empresa=empresa.ID_empresa
                                            WHERE ID_usuario = $id_usr");
                          $emp = $obj->resultSet();
                          foreach($emp as $row){
                            $nombre_empresa = $row['Empresa'];
                          }
                        ?>
                        <h4 class=""><?php echo $nombre_empresa?></h4>                        
                        <a href="#" class="text-dark font-weight-bold text-decoration-none">Información personal</a>                        
                </div>
                
                </div>
                </div>
                </div>


                
            
            

            <!--------------------------------- TABLA 1 --------------------------------->             
            <div class="container">
              <div class="card mt-5">
                <div class="card-body">

                
              <form action="php/addContactosT.php" id="addContactsT" name="adct" method="POST">
                <div class="table-responsive">
                  <div class="table-wrapper">
                      <div class="table-title">
                          <div class="row">
                              <div class="col-xs-6">                                  
                              </div>
                              <!-- BOTONES DE LA TABLA--> 
                              <!-- BOTONES DE LA TABLA--> 
                              
                                <div class="col-xs-6 mb-3">                                 
                                  <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tablaModal" style="background-color: #0371F1;"> <span>Agregar</span></a>                                  
                                </div>                                                          
                          </div>
                      </div>
                      <!-- BOTONES DE LA TABLA--> 
                      <table class="table table-striped table-hover text-center">
                          <thead>
                              <tr>
                                  <th>Nombre</th>
                                  <th>Puesto</th>
                                  <th>Email</th>
                                  <th>Teléfono</th>
                                  <th>Extensión</th>
                                  <th>Celular</th>                                  
                                  <th>Opciones</th>
                              </tr>
                          </thead>                          
                          <tbody>       
                            <?php
                              $database-> query("SELECT * FROM contacto WHERE id_usuario=$id_usr");
                              $rows = $database->resultSet();?>
                              <?php foreach($rows as $row) :?>
                              <tr>                                  
                                  <td><?php echo $row['Nombre']?></td>
                                  <td><?php echo $row['Puesto']?></td>
                                  <td><?php echo $row['Email']?></td>
                                  <td><?php echo $row['Tel']?></td>
                                  <td><?php echo $row['Ext']?></td>
                                  <td><?php echo $row['Cel']?></td>           
                                  <input type="hidden" id="txt_usr" name="txt_usr" value="<?php echo $id_usr?>">                       
                                  <!-- OPCIONES-->                                   
                                  <td>
                                    <ul class="list-group list-group-horizontal">
                                    <input type="hidden" id="idcontacto" name="idcontacto" value="<?php echo $row['ID_contacto']?>">
                                    <a  class=" list-group-item "><i data-bs-toggle="modal" data-bs-target="#tablaModalEditar" class="bi bi-pencil-square btneditarContacto" style="cursor:pointer;">Editar</a></i>
                                      <a href="php/addContactosT.php?deletet=<?php echo $row['ID_contacto'];?>"class=" list-group-item"><i class="bi bi-archive-fill">Borrar</a></i>
                                    </ul>
                                      
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                    </div>
                </div>
              </form>
              </div>
              </div>
              <!------------------------------------------ MODAL Editar  ------------------------------------------>  

              <div class="modal fade" id="tablaModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDITAR CONTACTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <!-- ELEMENTOS CONTENIDOS EN EL MODAL -->         
              <div class="modal-body">
                <div id="idcontact"></div>
                <div id="notificacionEditarC"></div>              
                <form  id="EditContacts"  method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" class="form-control" id="nombreedit" name="nombreedit" placeholder="Ejemplo: Alejandro Lopez Lopez">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput2">Puesto</label>
                    <input type="text" class="form-control" id="puestoedit" name="puestoedit"  placeholder="Ejemplo: IT Support">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput3">Email</label>
                    <input type="email" class="form-control" id="mailedit" name="mailedit" placeholder="Ejemplo: ale2201@example.com">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput4">Teléfono</label>
                    <input type="tel" class="form-control" id="teledit" name="teledit" placeholder="Ejemplo: 55-55-55-55">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput5">Extensión</label>
                    <input type="number" class="form-control" id="extedit" name="extedit" placeholder="Ejemplo: 2201">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput6">Celular</label>
                    <input type="tel" class="form-control" id="celedit" name = "celedit" placeholder="Ejemplo: 55-55-55-55">
                    <input type="hidden" id="iduser" name="iduser" value="<?php echo $id_usr?>">                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>-
                    <input type="submit" id="btnEditarContacto" class="btn btn-primary" value="Guardar">
                  </div>
                </form>                                                  
              </div>
              <!-- FIN ELEMENTOS CONTENIDOS EN EL MODAL -->
              
              </div>
              </div>
              </div>
              <!------------------------------------------ MODAL  ------------------------------------------>          

              <form action="php/addContactosT.php" id="addContactsT" name="adct" method="POST">
              <div class="modal fade" id="tablaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">CONTACTO</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>


              <!-- ELEMENTOS CONTENIDOS EN EL MODAL -->
              <!-- ELEMENTOS CONTENIDOS EN EL MODAL -->
              <!-- ELEMENTOS CONTENIDOS EN EL MODAL -->


              <div class="modal-body">              
              <form action="php/addContactosT.php" id="addContactsT" name="adct" method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" class="form-control" id="tr_nombre" name="tr_nombre" placeholder="Ejemplo: Alejandro Lopez Lopez">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput2">Puesto</label>
                    <input type="text" class="form-control" id="tr_puesto" name="tr_puesto"  placeholder="Ejemplo: IT Support">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput3">Email</label>
                    <input type="email" class="form-control" id="tr_mail" name="tr_mail" placeholder="Ejemplo: ale2201@example.com">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput4">Teléfono</label>
                    <input type="tel" pattern="[0-9]{10}" required class="form-control" id="tr_tel" name="tr_tel" placeholder="Ejemplo: 55-5555-5555">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput5">Extensión</label>
                    <input type="number" class="form-control" id="tr_ext" name="tr_ext" placeholder="Ejemplo: 2201">
                  </div>

                  <div class="form-group mt-3">
                    <label for="exampleFormControlInput6">Celular</label>
                    <input type="tel" class="form-control" id="tr_cel" name = "tr_cel" placeholder="Ejemplo: 55-55-55-55">
                    <input type="hidden" id="tr_usr" name="tr_usr" value="<?php echo $id_usr?>">                    
                  </div>                  
                </form>                                                  
              </div>
              <!-- FIN ELEMENTOS CONTENIDOS EN EL MODAL -->
              <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>-
              <input href="" type="submit" name= "btnaddC" class="btn btn-primary" value="Guardar">
              </div>
              </div>
              </div>
              </div>
              </form>
               <!-- END MODAL -->
               <!-- END MODAL -->
               <!-- END MODAL -->                                     
                  </div>
              </div>        
          </div> 
          
          </div>
          </div>
          </div>


          
        



          <!------------------------------------------- TABLA 2 ------------------------------------------->     
          <div class="container">
              <div class="card mt-5 mb-5">
                <div class="card-body">                      



            <form action="php/addRequ.php" id="addReq" name="adr" method="POST">
              <div class="table-responsive">                  
                  <div class="table align-middle">
                      <div class="table-title">
                          <h4 class="text-center mt-2">Requerimientos agregados</h4>
                          <div class="row">
                              <div class="col-xs-6">                                  
                              </div>
                              <!-- BOTONES DE LA TABLA--> 
                              <!-- BOTONES DE LA TABLA--> 
                              <div class="col-xs-6 mb-3">
                                  <a href="#" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#exampleModal2"> <span>Agregar</span></a>               
                              </div>
                          </div>
                      </div>
                      <!-- BOTONES DE LA TABLA--> 
                      <table class="table table-striped table-hover text-center">
                          <thead>
                              <tr class="align-bottom">                                                                    
                                  <th>Folio</th>
                                  <th>Producto</th>
                                  <th>Tipos de materiales</th>
                                  <th>Volumen anual</th>                                  
                                  <th>Otros comentarios</th>
                                  <th>Opciones</th>
                              </tr>
                          </thead>                          
                          <tbody>
                            <?php 
                            $database->query("SELECT requerimiento_producto.ID_req_producto, producto_tractora.Producto , requerimiento_producto.Tipo_material, requerimiento_producto.Volumen_anual, requerimiento_producto.Comentarios
                                              FROM producto_tractora
                                              INNER JOIN requerimiento_producto ON producto_tractora.ID_producto = requerimiento_producto.ID_req_producto
                                              WHERE requerimiento_producto.ID_usuario=$id_usr");
                            $res = $database->resultSet();?>
                            <?php foreach($res as $row) :?>
                              <tr>
                                <td class="align-top"><?php echo $row['ID_req_producto']?></td>
                                <td class="align-top"><?php echo $row['Producto']?></td>
                                <td class="align-top"><?php echo $row['Tipo_material']?></td>
                                <td class="align-top"><?php echo $row['Volumen_anual']?></td>
                                <td class="align-top"><?php echo $row['Comentarios']?></td>                            
                                  <!-- OPCIONES--> 
                                  <td>
                                    <?php /*if(isset($row['ID_req_producto'])){
                                      $id_requerimiento='';
                                    }else{
                                      $id_requerimiento = $row['ID_req_producto'];
                                    }*/?>
                                    <ul class="list-group list-group-horizontal">
                                    <input type="hidden" id="idrequeri" name="idrequeri" value="<?php echo $row['ID_req_producto']?>">
                                      <a class=" list-group-item"><i data-bs-toggle="modal" data-bs-target="#editarReq" class="bi bi-pencil-square btnEditarReq">Editar</a></i>
                                      <a href="php/addRequ.php?deleteq=<?php echo $row['ID_req_producto'];?>"class=" list-group-item"><i class="bi bi-archive-fill">Borrar</a></i>
                                    </ul>                                      
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
            </form>

                      <!------------------------------------------ MODAL 2  ------------------------------------------>         
              <form action="php/addRequ.php" id="addReq" name="adr" method="POST">
              <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AGREGAR REQUERIMIENTOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ELEMENTOS CONTENIDOS EN EL MODAL2 -->
                <div class="modal-body">                
                  <form>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Comodity </label>
                      <select class="form-control" name="comodity" id="comodity">
                        <option>- Seleccione una opción -</option>
                        <option value="1">Producto</option>
                        <option value="2">Proceso</option>
                        <option value="3">Materia prima</option>
                        <option value="4">Servicios indirectos</option>                        
                      </select>
                    </div>
                    <!-- Creacion del combo con los productos de c/u de los catalogos -->
                    <div class="form-group mt-3"> 
                      <label for="exampleFormControlSelect1">Producto</label>                                                                     
                      <select class="form-control" name="cmbProducto" id="cmbProducto">
                      </select>
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleModalLabel">¿No encuentras tu producto?</label><br><br>                                                                  
                      <input type="checkbox" name="addRequerimiento" class="i-radio form-check-input" value="addRequerimiento"> Agregar producto
                      <input type="text" name="txt_productoR" id="txt_productoR" class="i-text form-control" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" placeholder="Ejemplo: Electrical Contacts">
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleFormControlSelect1">Tipo de Materiales</label>
                      <input type="text" class="form-control" id="txt_typeM" name="txt_typeM" placeholder="Ejemplo: Metales">
                    </div>                    
                    <div class="form-group mt-3">
                      <label for="exampleFormControlTextarea1">Volumen Anual</label>
                      <input type="text" class="form-control" id="txt_vol" name="txt_vol" placeholder="Ejemplo: Variable">
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleFormControlTextarea1">Otros comentarios</label>
                      <textarea class="form-control" id="txt_aComents" name="txt_aComents" rows="5"></textarea>
                      <input type="hidden" id="txt_usuR" name="txt_usuR" value="<?php echo $id_usr?>">                      
                    </div>
                  </form>                                                          
                </div>
                <!-- FIN ELEMENTOS CONTENIDOS EN EL MODAL2 -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input href="PaginaprincipalDeTractoras.php?edit=<?php echo $id_requerimiento;?>" type="submit" name= "btnaddr" class="btn btn-primary" value="Guardar">
                </div>
                </div>
                </div>
                </div>
                 <!-- END MODAL2 -->
                  </div>
              </div>        
          </div>
          </form>
          
          <div class="modal fade" id="editarReq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar REQUERIMIENTOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- ELEMENTOS CONTENIDOS EN EL MODAL2 -->
                <div class="modal-body">
                <div id="idRequeri"></div>
                <div id="notificarEditarRequ"></div>                
                  <form id="editarRequerimientoModal">                                      
                    <div class="form-group mt-3">
                      <label for="exampleFormControlSelect1">Tipo de Materiales</label>
                      <input type="text" class="form-control" id="editmateriales" name="editmateriales" placeholder="Ejemplo: Metales">
                    </div>                    
                    <div class="form-group mt-3">
                      <label for="exampleFormControlTextarea1">Volumen Anual</label>
                      <input type="text" class="form-control" id="editvol" name="editvol" placeholder="Ejemplo: Variable">
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleFormControlTextarea1">Otros comentarios</label>
                      <textarea class="form-control" id="editComents" name="editComents" rows="5"></textarea>
                                            
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input type="submit" id="btneditReq" class="btn btn-primary" value="Guardar">
                </div>
                  </form>                                                          
                </div>
                <!-- FIN ELEMENTOS CONTENIDOS EN EL MODAL2 -->
                
                </div>
                </div>
                </div>

          </div>
          </div>
          </div>


    <!-- FINAL DEL CONTENEDOR -->
</section>
 <!-- FOOTER -->
 <div class="footer-link-div float-start pt-5">
  <div class="container">
     <div class="row row-cols-2 row-cols-md-2  row-cols-lg-4">
        <div class="col-6">
           <div class="comon-footer-div pt-4">
               <a href="#">
                  <img src="images/logo-white.png" alt="logo"/>
               </a>

              <h6 class="ft-call"> +1(088) 456888 (24/7) </h6>
              <p class="text-white"> <i class="fas fa-map-marker-alt"></i> 3rd Avenue, Upper East Side,
                San Francisco </p>
           </div>
        </div>
 
        <div class="col">
          <div class="comon-footer-div pt-4 justify-content-md-end d-grid">
              <h5 class="text-white"></h5>
              <ul class="list-unstyled mt-4">
                <li>
                  <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
                </li>
                <li>
                  <a href="#"> <i class="fab fa-google-plus-g"></i> Google+ </a>
                </li>
                <li>
                  <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                </li> </ul></div>  </div></div>             
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
<span> Close </span> <i class="fas fa-long-arrow-alt-right"></i>
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

            <li>
              <a class="logout" > Cerrar sesión </a>
            </li>

          </ul>
        </div>

<ul class="side-media list-unstyled">
   <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
   <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
   <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
   <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
</ul>
</div>
</div>
</div>

<script src="js/app.js" ></script>
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