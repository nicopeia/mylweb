
<?php 

session_start();
     

if(!isset($_SESSION['usuario'])) {
  header('Location:login.php');

}         
include "conexion.php";
if (!empty( $_POST['usuario'] ) && !empty( $_POST['pass'])  ) {

  $consulta = $conexion->prepare('SELECT * FROM usuarios_login WHERE usuario=:usuario AND pass=:pass ');
  
  
  $consulta->bindParam(':usuario', $_POST['usuario']);
  $consulta->bindParam(':pass', $_POST['pass']);
  
  $consulta->execute();
  
  
  $resultado= $consulta->fetch(PDO:: FETCH_OBJ );
  
  
  
  if ($consulta->rowCount() ==1 ) {
  
   $_SESSION['usuario'] = $resultado->usuario;
    
   header('Location:panel.php');
  
   }else{
      header('Location:login.php');
   }
  }
     
 if(isset($_POST['modificar']) && isset($_SESSION['usuario']) ){
   header("Location:update.php");
   
 }
 
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ESTUDIO CONTABLE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <!-- Bootstrap CSS -->

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
  <!-- Ionic Icons  fontawesome-->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="main.js"></script>

  <!-- GOOGLE FONTS FUENTES -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Castoro&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>




    </head>
    <body>


<!-- menu de navegacion -->
<nav  class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
    <a  class="navbar-brand"><img  id="logo" src="img/logo1png.png"  alt="logo"><span class="spanlogo">M&L <small>consultores</small> </span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="icon ion-md-menu"></i>
    </button>
    
    <div  class="collapse navbar-collapse" id="navbarCollapse">
    
      <ul  class="navbar-nav ml-auto">
     
       
     
          <h5 style="font-size:14px"  class="text-center lead mt-1">Bienvenido:  <?php echo $_SESSION['usuario']?></h5>
         <p> <a style="font-size:14px"  class="text-right lead mt-1 pl-2" href="cerrarsesion.php">Cerrar Sesion</a>
     
  

    




      </div>
      </ul>





    </div>
  </nav>




<section id="fondopanel">
  <div class="overlaypanel">
  <div class="container">
  <div class="row">

    <div class="col-md-6 contenidoserv mt-3 py-5">


<br>
<br><br>


     
        <h1 style="color:#fdfdfd" class=" display-2   text-left ">M&L Consultores</h1>
     

    </div>









    </div>
  </div>
    </div>
</section>

<div class="container">
    <h2 class="text-dark text-center mt-2">PANEL</h2>
    <h4 class="text-dark text-center lead">M&L Consultores</h4>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6 col-sm-6 col-xs-6  text-center mt-3">


  
      <a class="btn btn-primary " href="update.php">PANEL DE NOVEDADES</a>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6  text-center  mt-3">
      <a class="btn btn-primary " href="panel_mensajes.php">PANEL DE MENSAJES</a>


    </div>



</div>
</div>





<div id="separador" class="py-5 mt-5">
  <div class="container py-3">
 
 <div class="row">
 
 <div class="col-md-12">
 
     <h3 class="text-center"style="color:#6ea4ee; font-weight: 600;">NOVEDADES</h3>
 
 
 
 
 </div>
 
 
 
 
 
 </div>
 
 
 
 
 
  </div>
 
 
 
 
 </div>




  <section id="fondoForm" >

    <div class="overlaycontacto">

           <div class="container">
               <div class="row">
                   <div class="col-md-8  mt-5 " >
         

                   </div>
    <div class="col-md-4 text-white">

    <h6 style="font-size: 30px;" class="text-white mt-5 py-3  text-center"><img  id="logo" src="img/logo1png.png"  alt="logo" class="text-center"> M&L </h6>



    </div>
           </div>
       </div>
     </div>
    </section>
    <footer class="footer ">

      <!-- INICIO CONTACTO Y FORMULARIO  -->




    </footer>
     <!-- INICIO FOOTER  -->
     <section>
     <div class="bg-dark py-3">
        <div class="container bg-dark">
          <div class="row">
            <div class="col-md-6">
        <img  id="logo" src="img/logo1png.png"  alt="logo" class="text-center">
        <span class="text-white">MyL Estudio Contable</span>
      </div>
      <div class="col md-6 ">
        <div id="redes" class="text-center py-3">

       <span class="text-white py-4"><i class="fab fa-linkedin-in icono"></i></span>
      </div>
      </div>
      </div>
    

      </div>

    </div>


  </section>
          <!-- SCRIPT-->
          <script src="js/main.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <!-- JavaScript Bundle with Popper.js -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
          <script src="https://kit.fontawesome.com/2e8004a58d.js" crossorigin="anonymous"></script>


      </body>
  </html>
