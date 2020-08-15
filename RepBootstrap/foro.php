<?php  

session_start();

if (isset($_SESSION['usuario'])) {
 $nombre = $_SESSION['usuario']['nombre_usuario'];
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
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js" integrity="sha512-aFvi2oPv3NjnjQv1Y/hmKD7RNMendo4CZ2DwQqMWzoURKxcqAoktj0nNG4LU8m23+Ws9X5uVDD4OXLqpUVXD5Q==" crossorigin="anonymous"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

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
            <a class="nav-link" href="#">Ir al foro</a>
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
    <li class="breadcrumb-item active" aria-current="page">Foro</li>
  </ol>
</nav>



<section class="py-4 section-comments bgimageForum">
  <div class="text-center mb-2 text-light">
    <h1 class="text-light">Haznos saber tu opinión</h1>
  </div>

  <div class="container align-self-center">

    <div class="mx-auto w-100 main-commment">
      <ul class="list-unstyled list-group list-group-horizontal bg-transparent" >
        <li class="list-group-item bg-transparent borderNoneForo">
          <img src="imgs/beard.png" class="avatar w-25 float-right" alt="">
        </li>
        <li class="list-group-item bg-transparent borderNoneForo">
          <?php if (isset($nombre)){
            echo "<p class='text-light text-center p-1 lead bg-color-x m-0 rounded'>".$nombre."</p>
            ";
          } ?>
        </li>
        <li class="list-group-item w-100 bg-transparent borderNoneForo">
          <textarea name="" placeholder="Publica tu opinion, preguntar algo" rows="5" class="w-100 text-muted"></textarea>
          <input type="submit" class="btn btn-primary float-right mt-2 shadow" value="Publicar">
        </li>
      </ul>
    </div>

    <div class="mx-auto w-100 hidden-comment">
      <ul class="list-unstyled list-group bg-transparent" >
        <?php if (isset($nombre)){
          echo "<p class='text-light text-center p-1 lead bg-color-x m-0 rounded'>".$nombre."</p>
          ";
        } ?>
        <li class="list-group-item bg-transparent borderNoneForo text-center">

          <img src="imgs/beard.png" class="avatar" alt="">
        </li>
        <li class="list-group-item bg-transparent borderNoneForo text-center align-self-center ">
          <textarea name="" placeholder="Publica tu opinion, preguntar algo" cols="40" class=" text-muted"></textarea>
          <input type="submit" class="btn btn-primary mt-2 shadow" value="Publicar">
        </li>
      </ul>
    </div>

  </div>

  <div class="bg-color-light-x-x pt-0 pb-3 ">

    <nav class="navbar navbar-light bg-light nav-forum">
      <a class="navbar-brand text-muted lead">Ve las discusiones recientes, <small class="text-cyan font-weight-bold">   o puedes <i class="icon ion-md-search"></i></small> </a>      
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar una temas de discusión" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0 border border-info" type="submit">ir</button>
      </form>
    </nav>

    <nav class="navbar navbar-light bg-light nav-forum-x ">
      <form class="form-inline mx-auto py-2">
        <input class="form-control" type="search" placeholder="Buscar una publicación" aria-label="Search">
        <button class="btn btn-primary" type="submit">ir</button>
      </form>
    </nav>

    <div class="comments-container">


      <ul id="comments-list" class="comments-list">
        <li>
          <div class="comment-main-level">
            <!-- Avatar -->
            <div class="comment-avatar"><img src="imgs/miss.png" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name"><a href="#">Sandra Enriquez</a></h6>
                <span>hace 20 minutos</span>
                <i class="icon ion-md-undo"></i>
                <i class="icon ion-md-heart"></i>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
              </div>
            </div>
          </div>
          <!-- Respuestas de los comentarios -->
          <ul class="comments-list reply-list">
            <li>
              <!-- Avatar -->
              <div class="comment-avatar"><img src="imgs/girl.png" alt=""></div>
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                <div class="comment-head">
                  <h6 class="comment-name"><a href="#">Lorena Rojero</a></h6>
                  <span>hace 10 minutos</span>
                  <i class="icon ion-md-undo"></i>
                  <i class="icon ion-md-heart"></i>
                </div>
                <div class="comment-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                </div>
              </div>
            </li>

            <li>
              <!-- Avatar -->
              <div class="comment-avatar"><img src="imgs/nina.png" alt=""></div>
              <!-- Contenedor del Comentario -->
              <div class="comment-box">
                <div class="comment-head">
                  <h6 class="comment-name"><a href="#">Agustin Ortiz</a></h6>
                  <span>hace 10 minutos</span>
                  <i class="icon ion-md-undo"></i>
                  <i class="icon ion-md-heart"></i>
                </div>
                <div class="comment-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                </div>
              </div>
            </li>
          </ul>
        </li>


        <li>
          <div class="comment-main-level">
            <!-- Avatar -->
            <div class="comment-avatar"><img src="imgs/glasses.png" alt=""></div>
            <!-- Contenedor del Comentario -->
            <div class="comment-box">
              <div class="comment-head">
                <h6 class="comment-name"><a href="#">Enrique Heredia</a></h6>
                <span>hace 10 minutos</span>
                <i class="icon ion-md-undo"></i>
                <i class="icon ion-md-heart"></i>
              </div>
              <div class="comment-content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
              </div>
            </div>
          </div>
        </li>
      </ul>
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
        <div class="text-muted">Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
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