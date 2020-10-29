<?php  

session_start();

if (isset($_SESSION['usuario'])) {
 $nombre = $_SESSION['usuario']['nombre_usuario'];

 if (isset($_POST['card_id_continue']) && isset($_POST['card_password_continue'])) {

   $id_continue = $_POST['card_id_continue'];
   $password_continue = $_POST['card_password_continue']; 
 }

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
  <script src="js/continue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js" integrity="sha512-aFvi2oPv3NjnjQv1Y/hmKD7RNMendo4CZ2DwQqMWzoURKxcqAoktj0nNG4LU8m23+Ws9X5uVDD4OXLqpUVXD5Q==" crossorigin="anonymous"></script>
  <script src="js/yearpicker.js" async></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

  <title>Repositorio</title>
</head>
<body>

 <div class="modal hide fade in" id="modal-adv" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">¡Inicie sesión para continuar!</h4>
      </div>
      <div class="modal-body">
        Es necesario acceder a su cuenta para continuar una investigacíon
      </div>
      <div class="modal-footer">
        <a href="log.php" class="btn btn-primary shadow">Iniciar Sesión</a>
      </div>
    </div>
  </div>
</div>

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
          <a class="nav-link" href="materials.php">Nanomateriales</a>
        </li>
        <li class="nav-item mr-auto">
          <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item mr-auto">
          <a class="nav-link" href="#">Proveedores</a>
        </li>
        <li class="nav-item mr-auto">
          <form class="input-group mb-0" action="#" method="post" id="form-quick-search">
            <input type="text" class="form-control" placeholder="Búsqueda rápida" aria-label="Búsqueda rápida" aria-describedby="basic-addon2" >
            <div class="input-group-append" >
              <button type="submit" class="input-group-text" >
                <span  id="basic-addon2"><i class="icon ion-md-search"></i></span>
              </button>
              <button type="button" class="input-group-text" >
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
        echo "<script type='text/javascript'>
        $(document).ready(function(){
          $('#modal-adv').modal({backdrop: 'static', keyboard: false});
          });
          </script>";
        }
        ?>    
      </ul>    
    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
      <li class="breadcrumb-item active" aria-current="page">Continuar Investigación</li>
    </ol>
  </nav>

  <section class="d-flex py-4 bg-color-light form-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="text-cyan">Continuar con una investigación</h1>
          <p class="text-muted">Ingrese los datos necesarios para poder continuar con la investigación</p>
          <hr />
        </div>
        <div class="col-lg-6">
          <form action="" method="post" id="formContinue" >
            <div class="form-group">
              <label for="">Id de la investigación</label>
              <input type="text" class="form-control" name="id_continue" id="id_continue" placeholder="Ingrese id" value="<?php if(isset($id_continue)){
                echo $id_continue;
              } ?>" minlength="20" maxlength="40" onkeyup="mayus(this);" />

            </div>
            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" class="form-control" name="password_continue" id="password_continue" placeholder="Contraseña"  value="<?php if(isset($password_continue)){
                echo $password_continue;
              } ?>" minlength="8" maxlength="16" />
            </div>
            <button type="submit" class="btn float-left mr-4 btn-primary shadow">Ir</button>
            <p class="float-left w-auto mt-2 warnings text-primary lead" id="warnings"></p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="d-flex py-4">
    <div class="container align-self-center">
      <div class="w-75 text-center mx-auto mb-2">
        <h2>Navega por las <span class="text-cyan">secciones de repositorio</span></h2>
        <p class="lead text-muted font-weight-bold">No olvides visitar el foro, aquí podrás discutir temas, ver las discusiones relevantes o agregar una pregunta</p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card my-3">
            <div class="card-body">
              <small class="text-cyan font-weight-bold">Continuar</small>
              <h2 class="font-weight-bold">Continuar con una investigación</h2>
              <p class="text-muted mb-3">Ingrese los datos para continuar con investigación</p>
              <form action="#" method="post">
                <ul class="list-unstyled mb-0">
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="id" placeholder="ID">
                  </li>
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="pass" placeholder="Contraseña">
                  </li>
                </ul>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary w-100 shadow " name="" value="Continuar">
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card my-3">
            <div class="card-body">
              <small class="text-cyan font-weight-bold">Agregar</small>
              <h2 class="font-weight-bold">Nueva investigación</h2>
              <p class="text-muted mb-3">Empieza una nueva investigación</p>
              <form action="#" method="post">
                <ul class="list-unstyled mb-0">
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="email" placeholder="Correo">
                  </li>
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="name" placeholder="Nombre">
                  </li>
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="profession" placeholder="Profesión ">
                  </li>
                </ul>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary w-100 shadow " name="" value="Generar ID">
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card my-3">
            <div class="card-body">
              <small class="text-cyan font-weight-bold">Añadir</small>
              <h2 class="font-weight-bold">Artículo</h2>
              <p class="text-muted mb-3">Agrega un articulo a la colección de repositorio</p>
              <form action="#" method="post">
                <ul class="list-unstyled mb-0">
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="name" placeholder="Nombre del autor">
                  </li>
                  <li>
                    <i class="icon ion-md-create lead text-cyan mr-3"></i>
                    <input class="inputR w-75" type="text" name="purposes" placeholder="Fines">
                  </li>
                  <li>
                    <i class="icon ion-md-document lead text-cyan mr-3"></i>
                    <div class="custom-file w-75 inputR">    
                      <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                      <label class="custom-file-label" for="customFileLang">Subir Archivo</label>
                    </div>
                  </li>
                </ul>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary w-100 shadow " name="" value="Ir">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-color-x py-4 d-flex">
    <div class="container align-self-center">
      <div class="w-75 text-center mx-auto">
        <h1 class="mb-1 text-light-x font-weight-bold">Únete a Repositorio</h1>
        <p class="text-light mb-0">Cree sus propios materiales, agregue materiales a la colección Repositorio y sea parte de la comunidad. Todo gratis!</p>
        <i class="icon ion-md-contact text-light"></i>
        <div class="mb-2">
          <a href="reg.php" class="btn btn-join shadow">Registrarse</a>  
        </div>
        <div>
          <a href="log.php" class="btn btn-join2 font-weight-bold">Iniciar Sesión</a>
        </div>        
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