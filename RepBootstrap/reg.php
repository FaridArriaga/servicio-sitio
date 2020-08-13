<?php  

session_start();

if (isset($_SESSION['usuario'])) {
 $nombre = $_SESSION['usuario']['nombre_usuario'];

 echo ("<script LANGUAGE='JavaScript'>
  window.alert('Usted ya tiene una sesion abierta');
  window.location.href='index.php';
  </script>");

}else{
  $nombre = null;
}

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" integrity="sha512-EvvoSMXERW4Pe9LjDN9XDzHd66p8Z49gcrB7LCUplh0GcEHiV816gXGwIhir6PJiwl0ew8GFM2QaIg2TW02B9A==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/yearpicker.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/registro.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js" integrity="sha512-aFvi2oPv3NjnjQv1Y/hmKD7RNMendo4CZ2DwQqMWzoURKxcqAoktj0nNG4LU8m23+Ws9X5uVDD4OXLqpUVXD5Q==" crossorigin="anonymous"></script>
  <script src="js/yearpicker.js" async></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

  <!-- Plugins -->

  <title>Repositorio</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand font-weight-bold mr-5" href="index.php">Repositorio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-auto dropdown">  
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Información
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-color-muted-x" href="infoCon.php">Continuar investigación</a>
              <a class="dropdown-item text-color-muted-x" href="infoNew.php">Investigación nueva</a>
            </div>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link" href="invDisponibles.php">Investigaciones</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link" href="foro.php">Ir al foro</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link" href="materials.php">Materiales y Nanomateriales</a>
          </li>
          <li class="nav-item mr-auto">
            <a class="nav-link" href="#">Productos</a>
          </li>
          <li class="nav-item mr-auto">
            <form class="input-group mb-0" action="#" method="post" id="form">
              <input type="text" class="form-control" placeholder="Búsqueda rápida" aria-label="Búsqueda rápida" aria-describedby="basic-addon2" id="input-src">
              <div class="input-group-append" id="btn-src">
                <button type="submit" class="input-group-text" id="input-src">
                  <span  id="basic-addon2"><i class="icon ion-md-search"></i></span>
                </button>
                <button type="button" class="input-group-text" id="input-src">
                 <span id="basic-addon2"><i class="icon ion-md-close"></i></i></span>
               </button>               
             </div>
           </form>
         </li>
       </ul>
     </div>
   </div>
 </nav>

 <nav aria-label="breadcrumb">
  <div  class=" float-right aling-self-center text-center session-user">
    <ul class="list-inline list-unstyled">
      <?php
      if (isset($nombre)) {
        echo "<li class='list-inline-item lead user-name'><p>".$nombre."</p></li>";
        echo "<li class='list-inline-item'><a href='php/salir.php' class='btn btn-danger exit_session rounded-0'>Salir</a></li>"; 
      }else{
        echo "<li class='list-inline-item'><a href='log.php' class='btn btn-secondary exit_session-2'>Iniciar sesión</a></li>";
        echo "<li class='list-inline-item'><a href='reg.php' class='btn btn-secondary exit_session-2'>Registrarse</a></li>"; 
      }
      ?>    
    </ul>    
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrarse</li>
  </ol>
</nav>

<section class="bg-color-dark-x-x py-4 d-flex">
  <div class="container align-self-center">
    <div class="py-1 shadow form-registro w-50 mx-auto">
      <form action="#" method="post" id="formularioReg" class="w-100">
        <div class="text-center mx-auto w-25">
          <img src="imgs/icon_reg.png" alt="" class="avatar w-75 my-4" id="logo_registro">
        </div>
        <h1 class="text-cyan text-center">Registro</h1>
        <div class="grupo">
          <input type="text" class="form-control" name="nombre" id="campo_nombre" required />
          <label for="">Nombre</label>
        </div>
        <div class="grupo">
          <input type="email" class="form-control" name="email"  required id="campo_email" />
          <label for="">Email</label>
        </div>
        <div class="grupo">
          <input type="password" class="form-control" name="contraseña" id="campo_contraseña" required onkeyup='check();' />
          <label for="">Contraseña</label>
        </div>
        <div class="grupo">
          <input type="password" class="form-control" name="rContraseña" id="campo_rep_contraseña"  required onkeyup='check();' />
          <label for="">Repetir contraseña <span id='messagePassword'></span></label>        
        </div>
        <div class="w-75 mx-auto">
          <input type="submit" name="" id="btn_registrarse" class="btn btn-primary w-100 btn-light" value="Registrarse">
        </div>

        <p class="warnings w-100" id="warnings"></p>
        
      </form>      
    </div>    
  </div>
</section>

<footer class="py-4 bg-color-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted mb-0 font-weight-bold">Creado por Farid. Derechos de Repositorio 2020</p>
      </div>
      <div class="col-lg-6 text-right">
        <ul class="list-inline mb-0 text-muted">
          <li class="list-inline-item mr-3"><i class="lead icon ion-md-analytics"></i></li>
          <li class="list-inline-item mr-3"><i class="lead icon ion-logo-linkedin"></i></li>
          <li class="list-inline-item"><i class="lead icon ion-md-at"></i></li>
        </ul>        
      </div>
    </div>
  </div>
</footer>
</body>
</html>