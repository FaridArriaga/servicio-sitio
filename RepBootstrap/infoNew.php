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
  <link rel="stylesheet" href="css/yearpicker.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js" integrity="sha512-aFvi2oPv3NjnjQv1Y/hmKD7RNMendo4CZ2DwQqMWzoURKxcqAoktj0nNG4LU8m23+Ws9X5uVDD4OXLqpUVXD5Q==" crossorigin="anonymous"></script>
  <script src="js/yearpicker.js" async></script>
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
    <li class="breadcrumb-item active" aria-current="page">Investigación nueva</li>
  </ol>
</nav>

<section class="d-flex py-4 bg-color-light form-info">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-6 align-self-center">
        <h1 class="text-cyan">Comenzar una nueva investigación</h1>
        <p class="text-muted">Ingrese los datos necesarios, podra generar el id necesario para la identificación de su investigación</p>
        <hr />
      </div>
      <div class="col-lg-6">
        <form id="genIdForm">
          <div class="form-group">
            <label for="inputNameInfo" class="text-cyan font-weight-bold">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese nombre" required>
          </div>
          <div class="form-group">
            <label for="InputProfInfo" class="text-cyan font-weight-bold">Profesión</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese profesión" required>
          </div>
          <div class="form-group">
            <label for="inputEmailInfo" class="text-cyan font-weight-bold">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese email" required>
          </div>
          <div class="form-group">
            <label for="inputPasswordInfo" class="text-cyan font-weight-bold">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico y contraseña con nadie más.</small>
          </div>
          <button type="submit" class="btn btn-primary shadow">Generar ID</button>
        </form> <!-- End of  GenID form -->
      </div> <!-- End of col-lg-6(2) -->
    </div> <!-- End of row -->
    <hr/>

    <div id="newInfoReg" class="w-75 align-self-center mx-auto mb-4"> 
      <div class="mb-2 text-center" >
        <h2 class="text-muted">Su id es: <span class="text-cyan font-weight-bold">ID</span></h2>
        <p class="text-muted">Ahora  ingrese los siguientes datos para continuar</p>
      </div>
      <form id="inputNewInfoReg">
        <div class="form-group">
          <label for="inputNames" class="text-cyan lead font-weight-bold">Nombres</label>
          <input type="text" class="form-control" id="inputNames" placeholder="Ingrese nombres" required>     
        </div>
        <div class="form-group py-1">
          <label for="inputYear" class="text-cyan lead font-weight-bold">Año</label>
          <input type="text" class="yearpicker form-control" id="inputYear" required/>
        </div>
        <div class="form-group">
          <label for="inputAdvanceDate" class="text-cyan lead font-weight-bold">Fecha de registro de avance</label>
          <input type="date" class="form-control" id="inputAdvanceDate" required>
        </div>
        <div class="form-group">
          <label for="inputTitle" class="text-cyan lead font-weight-bold">Título</label>
          <input type="text" class="form-control" id="inputTitle" placeholder="Título" required>
        </div>
        <button type="submit" class="btn btn-primary shadow">Siguiente</button>
      </form> <!-- End of inputNewInfoReg -->
    </div> <!-- End of newDataReg -->
    
    <div id="newInfoReg2" class="w-75 align-self-center mx-auto mb-4">
      <hr/>
      <form id="inputNewInfoReg2">
        <div class="form-group text-center">
          <label for="multipleMaterial" class="text-cyan lead font-weight-bold">Tipo de material:</label>
          <select class="form-control" id="materiales" multiple="multiple" required>
            <option value="metal">Metálico</option>
            <option value="cera">Cerámico</option>
            <option value="sc">SemiC</option>
            <option value="poli">Polimérico</option>
            <option value="comp">Comp</option>
            <option value="other">Otro</option>
          </select>
        </div>
        <div class="form-group text-center">
          <label for="multipleClasif" class="text-cyan lead font-weight-bold">Clasificación:</label>
          <select class="form-control" id="dimension" multiple="multiple" required>
            <option value="0D">0D</option>
            <option value="1D">1D</option>
            <option value="2D">2D</option>
            <option value="3D">3D</option>
            <option value="4D">4D</option>
            <option value="5D">5D</option>
          </select>
        </div>
        <div class="form-group">
          <label for="finesTextarea" class="text-cyan lead font-weight-bold">Fines de investigación:</label>
          <textarea class="form-control" id="finesTextarea" rows="3" placeholder="Fines de la investigacion" required></textarea>
        </div>
        <div class="form-group">
          <label for="caracteristicasTextarea" class="text-cyan lead font-weight-bold">Características de material o nanomaterial:</label>
          <textarea class="form-control" id="caracteristicasTextarea" rows="3" placeholder="Caracteristiscas:" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary shadow">Siguiente</button>
      </form> <!-- End of inputNewInfoReg2 -->
    </div> <!-- End of newInfoReg2 -->
    <hr/>

    <div id="newInfoType" class="w-75 align-self-center mx-auto mb-4">
      <div class="text-center mb-2">
        <h2 class="text-muted">Que tipo de investigacion es <span class="text-cyan">Título</span></h2>
        <p class="text-muted">Ahora  ingrese los siguientes datos para continuar</p>
      </div>
      <form id="formNewInfoType">
        <div class="form-group">
          <label for="summaryTextarea" class="text-cyan lead font-weight-bold">Resumen</label>
          <textarea class="form-control" id="summaryTextarea" rows="3" placeholder="Resumen" required></textarea>
        </div>
        <div class="form-group">
          <label for="introTextarea" class="text-cyan lead font-weight-bold">Introducción</label>
          <textarea class="form-control" id="introTextarea" rows="2" placeholder="Introducción" required></textarea>
        </div>
        <div class="form-group">
          <label for="backTextarea" class="text-cyan lead font-weight-bold">Antecendentes(opcional)</label>
          <textarea class="form-control" id="backTextarea" rows="3" placeholder="Antecendentes" required></textarea>
        </div>
        <div class="form-group">
          <label for="objTextarea" class="text-cyan lead font-weight-bold">Objetivos</label>
          <textarea class="form-control" id="objTextarea" rows="3" placeholder="Objetivos" required></textarea>
        </div>
        <div class="form-group">
          <label for="hypoTextarea" class="text-cyan lead font-weight-bold">Hipótesis</label>
          <textarea class="form-control" id="hypoTextarea" rows="3" placeholder="Hipótesis" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary shadow">Metodología</button>
      </form> <!-- formNewInfoType -->
    </div> <!-- End of newInfoType -->

    <div id="newInfoMethod" class="w-75 align-self-center mx-auto mb-4">
      <hr/>
      <div class="text-center mb-2">
        <h2 class="text-muted">Metodología de <span class="text-cyan">Título</span></h2>
        <p class="text-muted">Ingrese los datos necesarioas para descriir la metodología utilizada</p>
      </div>
      <form id="formNewInfoMethod">
        <label for="inputFileMethod" class="text-cyan lead font-weight-bold">Método de síntesis</label>
        <div class="custom-file form-group">          
          <input type="file" class="custom-file-input form-control" id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">Subir Archivo para el esquema de síntesis</label> 
        </div>
        <div class="form-group mt-2">
          <textarea class="form-control" id="sintTextarea" rows="3" placeholder="Descripción" required></textarea>
        </div>

        <div>
          <label for="inputfilestep" class="text-cyan lead font-weight-bold">Pasos a seguir</label>
          <div class="row align-self-center">
            <div class="col-lg-4 form-group fieldGroup align-self-center">
              <div class="card my-3">
                <div class="card-body">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <div class="custom-file form-group">
                        <input type="file" name="step[]" class="custom-file-input form-control" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Subir archivo</label> 
                      </div>   
                    </li>
                    <li>
                      <div class="form-group mt-1">
                        <textarea class="form-control" name="desc[]" id="sintTextarea" rows="3" placeholder="Descripción de paso" required></textarea>
                      </div>
                    </li>
                  </ul>
                  <div class="card-footer input-group-addon text-center">
                   <a href="javascript:void(0)" class="btn btn-success addMore"><span class="icon ion-md-add font-weight-bold" aria-hidden="true"></span> Añadir paso</a>
                 </div>
               </div>
             </div>
           </div>

           <div class="col-lg-4 align-self-center form-group fieldGroupCopy" style="display: none;">
            <div class="card my-3">
              <div class="card-body">
                <ul class="list-unstyled mb-0">
                  <li>
                    <div class="custom-file form-group">
                      <input type="file" name="step[]" class="custom-file-input form-control" id="customFileLang" lang="es">
                      <label class="custom-file-label" for="customFileLang">Subir archivo</label>
                    </div>       
                  </li>
                  <li>
                    <div class="form-group mt-1">
                      <textarea class="form-control" name="desc[]" id="sintTextarea" rows="3" placeholder="Descripción de paso" required></textarea>
                    </div>
                  </li>
                </ul>
                <div class="card-footer input-group-addon text-center">
                  <a href="javascript:void(0)" class="btn btn-danger remove"><span class="icon ion-md-trash" aria-hidden="true"></span> Eliminar paso</a>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End of row -->
      </div>

      <div>
        <label for="inputFileMethod" class="text-cyan lead font-weight-bold">Funcionamiento</label>
        <div class="custom-file form-group">          
          <input type="file" class="custom-file-input form-control" id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">Subir Archivo para el esquema de funcionamiento</label> 
        </div>
        <div class="form-group mt-2">
          <textarea class="form-control" id="sintTextarea" rows="3" placeholder="Descripción de material" required></textarea>
        </div>
      </div>

      <div>
        <label for="inputfilestep" class="text-cyan lead font-weight-bold">Materiales</label>
        <div class="row align-self-center">
          <div class="col-lg-4  fieldGroup2 align-self-center">
            <div class="card my-3">
              <div class="card-body">
                <ul class="list-unstyled mb-0">
                  <li>
                    <div class="custom-file form-group">
                      <input type="file" name="step[]" class="custom-file-input form-control" id="customFileLang" lang="es">
                      <label class="custom-file-label" for="customFileLang">Subir archivo</label> 
                    </div>   
                  </li>
                  <li>
                    <div class="form-group mt-1">
                      <textarea class="form-control" name="desc[]" id="sintTextarea" rows="3" placeholder="Descripción de material" required></textarea>
                    </div>
                  </li>
                </ul>
                <div class="card-footer input-group-addon text-center">
                 <a href="javascript:void(0)" class="btn btn-success addMore2"><span class="icon ion-md-add font-weight-bold" aria-hidden="true"></span> Añadir material</a>
               </div>
             </div>
           </div>
         </div>

         <div class="col-lg-4 align-self-center form-group fieldGroupCopy2" style="display: none;">
          <div class="card my-3">
            <div class="card-body">
              <ul class="list-unstyled mb-0">
                <li>
                  <div class="custom-file form-group">
                    <input type="file" name="step[]" class="custom-file-input form-control" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Subir archivo</label>
                  </div>       
                </li>
                <li>
                  <div class="form-group mt-1">
                    <textarea class="form-control" name="desc[]" id="sintTextarea" rows="3" placeholder="Descripción de material" required></textarea>
                  </div>
                </li>
              </ul>
              <div class="card-footer input-group-addon text-center">
                <a href="javascript:void(0)" class="btn btn-danger remove2"><span class="icon ion-md-trash" aria-hidden="true"></span> Eliminar material</a>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End of row -->
    </div>
    <button type="submit" class="btn btn-primary shadow">Siguiente</button>
  </form> <!-- End of formNewInfoMethod -->
</div> <!-- End of newInfoMethod -->


<div id="newInfoMethod2" class="w-75 align-self-center mx-auto mb-4">
  <hr/>
  <div class="text-center mb-2">
    <h2 class="text-muted">Metodología 2 de <span class="text-cyan">Título</span></h2>
    <p class="text-muted">Ingrese los datos necesarioas para descriir la metodología utilizada</p>
  </div>
  <form id="formNewInfoMethod2">
    <div class="form-group">
      <label for="selectEv" class="text-cyan lead font-weight-bold">Evaluación</label>
      <select name="select" id="inputSelect" class="form-control w-25" required="required">
        <option value="1">Fisícoquímica</option>
        <option value="2">Biológica</option>
      </select>
      <div class="divOculto mt-3" id="div1">
        <div>
          <label for="hypoTextarea" class="text-cyan font-weight-light">Técnicas útiles para una investigacíon fisícoquímica</label>
          <textarea class="form-control" id="hypoTextarea" rows="3" placeholder="Describa aquí las técnicas útiles para una investigacíon fisícoquímica" required></textarea>
        </div>
        <div>
          <label for="hypoTextarea" class="text-cyan font-weight-light mt-2">Justificación de elección de técnicas</label>
          <textarea class="form-control" id="hypoTextarea" rows="3" placeholder="Describa aquí la justificación de elección de técnicas para una investigacíon fisícoquímica" required></textarea>
        </div>
      </div>
      <div class="divOculto mt-3" id="div2">
        <div>
          <label for="hypoTextarea" class="text-cyan font-weight-light">Técnicas útiles para una investigacíon biológica</label>
          <textarea class="form-control" id="hypoTextarea" rows="3" placeholder="Describa aquí las técnicas útiles para una investigacíon biológica" required></textarea>
        </div>
        <div>
          <label for="hypoTextarea" class="text-cyan font-weight-light mt-2">Justificación de elección de técnicas</label>
          <textarea class="form-control" id="hypoTextarea" rows="3" placeholder="Describa aquí la justificación de elección de técnicas para una investigacíon biológica" required></textarea>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary shadow">Resultados esperados</button>
  </form> <!-- End of formNewInfoMethod2 -->
</div> <!-- End of newInfoMethod2 -->

<div id="expectedRes" class="w-75 align-self-center mx-auto mb-4">
  <hr/>
  <div class="text-center mb-2">
    <h2 class="text-muted">Resultados esperados de <span class="text-cyan">Título</span></h2>
    <p class="text-muted">A continuacion ingrese los datos necesarios para describir los resultados esperdos de su investigacíon</p>
  </div>
  <form id="formExpectedRes">
    <div>
      <div>
        <label for="inputfilestep" class="text-cyan lead font-weight-bold">Explicación</label>
        <p><small class="text-muted">Agrege imagenes de técnicas de caracteriación, experimentacíon, evaluación, etc...</small></p>        
      </div>
      <div class="row align-self-center">
        <div class="col-lg-4 form-group fieldGroup3 align-self-center">
          <div class="card my-3">
            <div class="card-body">
              <ul class="list-unstyled mb-0">
                <li>
                  <div class="custom-file form-group">
                    <input type="file" name="step[]" class="custom-file-input form-control" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Subir imagen</label> 
                  </div>   
                </li>
                <li>
                  <div class="form-group mt-1">
                    <textarea class="form-control" name="desc[]" id="sintTextarea" rows="3" placeholder="Descripción" required></textarea>
                  </div>
                </li>
              </ul>
              <div class="card-footer input-group-addon text-center">
               <a href="javascript:void(0)" class="btn btn-success addMore3"><span class="icon ion-md-add font-weight-bold" aria-hidden="true"></span> Añadir imagen</a>
             </div>
           </div>
         </div>
       </div>

       <div class="col-lg-4 align-self-center form-group fieldGroupCopy3" style="display: none;">
        <div class="card my-3">
          <div class="card-body">
            <ul class="list-unstyled mb-0">
              <li>
                <div class="custom-file form-group">
                  <input type="file" name="step[]" class="custom-file-input form-control" id="customFileLang" lang="es">
                  <label class="custom-file-label" for="customFileLang">Subir imagen</label>
                </div>       
              </li>
              <li>
                <div class="form-group mt-1">
                  <textarea class="form-control" name="desc[]" id="sintTextarea" rows="3" placeholder="Descripción" required></textarea>
                </div>
              </li>
            </ul>
            <div class="card-footer input-group-addon text-center">
              <a href="javascript:void(0)" class="btn btn-danger remove3"><span class="icon ion-md-trash" aria-hidden="true"></span> Eliminar imagen</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End of row -->
  </div>
</form> <!-- End of formExpectedRes -->
</div> <!-- End expectedRes -->

<div id="certainty" class="w-75 align-self-center mx-auto mb-4">
  <hr/>
  <div class="text-center mb-2">
    <h2 class="text-muted">Certeza de <span class="text-cyan">Título</span></h2>
    <p class="text-muted">Ingrese los datos necesarioas para descriir la metodología utilizada</p>
  </div>
  <form id="formCertainty">
    <div class="form-group">
      <label for="selectEv" class="text-cyan lead font-weight-bold">Nivel de certeza</label>
      <select name="select" id="inputSelect" class="form-control w-25" required="required">
        <option value="vHigh">Muy Alta</option>
        <option value="high">Alta</option>
        <option value="med">Media</option>
        <option value="low">Baja</option>
        <option value="null">Nula</option>
      </select>
    </div>

    <div class="form-group">
      <label for="selectEv" class="text-cyan lead font-weight-bold">Ventajas</label>
      <div class="row align-self-center">
        <div class="col-lg-4  fieldGroup4 my-auto">
          <ul class="list-unstyled">
            <li class="align-self-center">
              <input type="text" class="form-control" id="advantage" placeholder="Ventaja">
            </li>
            <li class="align-self-center">
              <a href="javascript:void(0)" class="btn btn-success addMore4"><i class="icon ion-md-add font-weight-bold" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 fieldGroupCopy4 my-auto" style="display: none;">
          <ul class="list-unstyled">
            <li class="align-self-center">
              <input type="text" class="form-control" id="advantage" placeholder="Ventaja">
            </li>
            <li class="align-self-center">
             <a href="javascript:void(0)" class="btn btn-danger remove4"><i class="icon ion-md-trash" aria-hidden="true"></i></a>
           </li>
         </ul>
       </div>

     </div> <!-- End of row -->
   </div>

   <div class="form-group">
    <label for="selectEv" class="text-cyan lead font-weight-bold">Desventajas</label>
    <div class="row align-self-center">
      <div class="col-lg-4 fieldGroup5 my-auto">
        <ul class="list-unstyled">
          <li class="align-self-center">
            <input type="text" class="form-control" id="disadvantage" placeholder="Desventaja">
          </li>
          <li class="align-self-center">
            <a href="javascript:void(0)" class="btn btn-success addMore5"><i class="icon ion-md-add font-weight-bold" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>

      <div class="col-lg-4 fieldGroupCopy5" style="display: none;">
        <ul class="list-unstyled">
          <li class="align-self-center my-auto">
            <input type="text" class="form-control" id="disadvantage" placeholder="Desventaja">
          </li>
          <li class="align-self-center">
           <a href="javascript:void(0)" class="btn btn-danger remove5"><i class="icon ion-md-trash" aria-hidden="true"></i></a>
         </li>
       </ul>
     </div>

   </div> <!-- End of row -->
 </div>

 <div class="form-group">
  <label for="backTextarea" class="text-cyan lead font-weight-bold">Metas y espectativas a futuro</label>
  <textarea class="form-control" id="backTextarea" rows="3" placeholder="Describa aquí  las metas y espectativas a futuro" required></textarea>
</div>

<div class="form-group">
  <label for="backTextarea" class="text-cyan lead font-weight-bold">Referencias útiles para el tema</label>
  <textarea class="form-control" id="backTextarea" rows="4" placeholder="Referencias" required></textarea>
</div>

<div class="form-group">
  <label for="backTextarea" class="text-cyan lead font-weight-bold">Bibliografía</label>
  <textarea class="form-control" id="backTextarea" rows="8" placeholder="Bibliografía" required></textarea>
</div>

<button type="submit" class="btn btn-primary tminar lead shadow">Terminar</button>

</form> <!-- formCertainty -->
</div> <!-- certainty -->

</div> <!-- End of container -->
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
                <input type="submit" class="btn btn-primary w-100 shadow" name="" value="Continuar">
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
        <ul class="mb-0 text-muted">
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