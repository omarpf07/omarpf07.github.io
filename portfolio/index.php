<?php
    header("Content-type: text/html;charset=\"utf-8\"");
    $error = ""; $mensajeExito = "";

    if ($_POST) {
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "E-mail no válido.<br>";   
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><p><b>Se generó un error:</b></p>' . $error . '</div>';
        } else {
            $nombre = $_POST['nombre'];
            $mail = $_POST['email'];
            $telefono = $_POST['telefono'];
            $asunto = $_POST['asunto'];
            $mensajeC = $_POST['mensaje'];
            
            $header = 'From: ' . $mail . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";

            $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
            $mensaje .= "Su e-mail es: " . $mail . " \r\n";
            $mensaje .= "Asunto: " . $asunto . " \r\n";
            $mensaje .= "Teléfono" . $telefono . " \r\n";
            $mensaje .= "Mensaje: " . $mensajeC . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());

            $para = 'omar.perozo07@gmail.com';
            $asunto = 'Mensaje de mi sitio web';

            if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
                $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado con éxito :)</div>';    
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar :(</div>';  
            } 
        }  
    }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Omar Perozo</title>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/animate.css">
  </head>
  <body>

  <!-- Inicio-->
  <section class="container-fluid slider d-flex align-items-center justify-content-center" id="Inicio">
    <div class="text-center">
      <h1 class="display-1 pb-2 mb-2">Omar Perozo</h1>
      <img src="img/avatar.jpg" alt="..." class="img-thumbnail img-fluid rounded mx-auto d-block rounded-circle" style="height: 30vh;">
      <blockquote class="blockquote">
      <p class="mb-0" id="quotes">Futuro Ingeniero en Informática.</p>
      <footer class="blockquote-footer"><i class="fa fa-desktop" aria-hidden="true"></i>,<i class="fa fa-headphones" aria-hidden="true"></i>,<i class="fa fa-book" aria-hidden="true"></i>,<i class="fa fa-coffee" aria-hidden="true"></i>.</footer>
    </blockquote>
    <button id="boton" class="btn btn-secondary hidden-xs-down"><i class="fa fa-smile-o fa fa-2x" aria-hidden="true"></i></button>
    </div>
  </section>

<!-- Menu de navegacion -->
  <nav id="menu" class="navbar navbar-inverse navbar-toggleable-md sticky-top fixed-top mt-2 pt-2" style="background-color: transparent;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand mb-0" href="index.html">Omar Perozo</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="navbar-nav mr-auto ml-auto text-center text-white">
      <a class="nav-item nav-link" href="#Inicio">Inicio</a>
      <a class="nav-item nav-link" href="#Acerca">Acerca de mí</a>
      <a class="nav-item nav-link" href="#Portafolio">Portafolio</a>
      <a class="nav-item nav-link" href="#Contacto">Contáctame</a>
    </div>
<!-- Botones de redes sociales, nav -->
    <div class="d-flex flex-row justify-content-center mt-1">
      <a href="https://www.facebook.com/omar.a.perozo" class="btn btn-primary mr-2" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/omarperezoso" class="btn btn-secondary mr-2" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/omar-perozo-b72664145" class="btn btn-info mr-2" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
      <a href="mailto:omar.perozo07@gmail.com" class="btn btn-danger mr-2" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
    </div>
    </div>
  </nav>
<!-- Fin de Botones de redes sociales, nav -->
<!--Fin de nav-->

<!--Acerca de mi-->
  <section class="container-fluid text-white" id="Acerca">
    <div class="container-fluid">
      <h2 class="display-4 d-flex align-items-center justify-content-center pb-5">Acerca de mí</h2>
    </div>

<!--Frases célebres-->
   <div class="container mt-5 mb-5">

      <!-- infos -->
      <div class="tab-content">
        <!-- elemento -->
        <div class="tab-pane active" id="home" role="tabpanel">
          <div class="row align-items-center ">
            <div class="col-md-4 mb-md-3 mb-lg-0">
              <img src="img/krishnamurti.jpg" alt="" class="img-thumbnail img-fluid rounded mx-auto d-block rounded-circle" style="height: 25vh;">
            </div>
            <div class="col-md-8 mb-md-5">
                <h2><b>Jiddu Krishnamurti </b></h2>
                <p>"No hay final a la educación. No es que lees un libro, pasas un examen y terminas la educación. La vida entera, desde el momento en que naces hasta el momento en que mueres es un proceso de aprendizaje."</p>
            </div>
          </div>
        </div><!-- fin elemento -->

        <!-- elemento -->
        <div class="tab-pane" id="home2" role="tabpanel">
          <div class="row align-items-center ">
            <div class="col-md-4 mb-md-3 mb-lg-0">
              <img src="img/jkrowling.jpg" alt="" class="img-thumbnail img-fluid rounded mx-auto d-block rounded-circle" style="height: 25vh;">
            </div>
            <div class="col-md-8 mb-md-5">
                <h2><b>J.K Rowling </b></h2>
                <p>“No necesitamos magia para cambiar el mundo, llevamos todo el poder que necesitamos dentro de nosotros.”</p>
            </div>
          </div>
        </div><!-- fin elemento -->
      </div><!-- fin  info -->
      <!-- nav -->
      <div class="row">
        <div class="offset-lg-4 col-lg-8">
          <ul class="nav nav-tabs caritas" role="tablist">
            <li class="nav-item bg-info bg-info">
              <a class="nav-link active bg-info" data-toggle="tab" href="#home" role="tab">
                <img src="img/krishnamurti-ico.jpg" alt="">
              </a>
            </li>
            <li class="nav-item bg-info">
              <a class="nav-link bg-info" data-toggle="tab" href="#home2" role="tab">
                <img src="img/jkrowling-ico.jpg" alt="">
              </a>
            </li>
          </ul><!-- fin nav -->
        </div>
      </div>
    </div>
<!--Fin frases célebres-->

  <!--Cardboxes-->
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top img-fluid" src="img/card1.jpg" alt="Card image cap">
        <div class="card-block bg-info">
          <h4 class="card-title text-center">FrontEND</h4>
          <p class="card-text text-center">Son todas aquellas tecnologías que corren del lado del cliente, es decir, aquellas que corren del lado del navegador web, generalizándose más que nada en tres lenguajes: HTML, CSS Y JavaScript.</p>
    </div>
        <div class="card-footer bg-info">
          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated text-center" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
          </div>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top img-fluid" src="img/card2.jpg" alt="Card image cap">
        <div class="card-block bg-info">
          <h4 class="card-title text-center ">BackEND</h4>
          <p class="card-text text-center">Son todas aquellas tecnologías que corren del lado del servidor, es decir, se encargan de interactuar con distintas tecnologías, y desde un servidor, "servir" todas las vistas que el FrontEnd muestra.</p>
        </div>
        <div class="card-footer bg-info">
           <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">25%</div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--Fin cardboxes-->

<!--Portafolio-->
  <section class="container justify-content-center align-items-center mt-5 mb-5 text-white" id="Portafolio">
    <h2 class="display-4 d-flex align-items-center justify-content-center pb-5">Portafolio</h2>
    <div id="carouselExampleIndicators" class="carousel slide justify-content-center" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="height: 70vh;">
          <img class="d-block img-fluid" src="img/placeholder.png" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Proyecto 1</h3>
            <p>Descripción del proyecto</p>
          </div>
        </div>
      <div class="carousel-item" style="height: 70vh;">
          <img class="d-block img-fluid" src="img/placeholder.png" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Proyecto 2</h3>
            <p>Descripción del proyecto</p>
          </div>          
      </div>
      <div class="carousel-item" style="height: 70vh;">
        <img class="d-block img-fluid" src="img/placeholder.png" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h3>Proyecto 3</h3>
            <p>Descripción del proyecto</p>
          </div>        
      </div>
      </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
  </section>
<!--Fin portafolio-->

<!--contacto-->
  <section class="container mt-5 pt-5 pb-5" id="Contacto">
    <h2 class="display-4 d-flex align-items-center justify-content-center">Contáctame</h2>
    <p class="lead text-center mt-1 pt-1 pb-5">¿Quiéres estar en contacto conmigo? Rellena los campos a continuación</p>  
    <div class="row">
      <div class="col-6">
        <div>
        <? echo $error $mensajeExito; ?>
        </div>
        <form method="post">
          <div class="form-group row">
            <label for="nombre" class="col-2 col-form-label hidden-sm-down">Nombre:</label>
            <input type="text" placeholder="Tu nombre acá" id="nombre" class="form-control col-10">
          </div>
          <div class="form-group row">
            <label for="email" class="col-2 col-form-label hidden-sm-down">Mail:</label>
            <input type="email" placeholder="Tu dirección de correo electrónico" class="form-control col-10" id="email" name="email">
          </div>
          <div class="form-group row">
            <label for="telefono" class="col-2 col-form-label hidden-sm-down">Teléfono:</label>
            <input type="tel" placeholder="Ej: +(+58)-XXXXXX" class="form-control col-10" id="telefono" name="telefono">
          </div>
          <div class="form-group row">
            <label for="asunto" class="col-2 col-form-label hidden-sm-down">Asunto:</label>
            <input type="text" placeholder="Ej: Asunto del mensaje" class="form-control col-10" id="asunto" name="asunto">
          </div>
          <div class="form-group row">
            <label for="mensaje" class="col-2 col-form-label hidden-sm-down">Mensaje:</label>
            <textarea class="form-control col-10" id="mensaje" rows="3" placeholder="Mensaje" name="mensaje"></textarea>
          </div>
          <div class="formgroup row d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-success " >Enviar</button>
          </div>
        </form>
      </div>
      <div class="col-6">
        <i class="fa fa-space-shuttle fa-spin fa-fw fa-5x" aria-hidden="true" style="font-size: 20vh"></i>
      </div>
    </div>  
  </section>
<!--fin contacto-->

<!--footer -->
  <footer class="container-fluid bg-info text-white py-3 text-center">
    <p>Omar Perozo, Zulia Venezuela. 2017</p>
  </footer>
<!--footer -->

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/25f057d986.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>