<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   <!-- <link rel="icon" href="../../favicon.ico">-->

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Barra de menu superior -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Tu correo" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Contrasena" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Connectarse</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="row" style="margin-left:10%; margin-top:50px; margin-bottom:40px">
        <a href="perfil_vendedor.php"><img class="col-md-4 img-circle" src="icono.jpg" style="width: 8%; vertical-align: middle; margin-bottom:;"></a>
        <a href="perfil_vendedor.php"><label class="col-md-4 control-label"style="vertical-align: middle;font-size: 2em;">Manuel_56</label></a>  <!-- nombre del vendedor -->
    </div>     
    
    <div class="container_chat">
      <p class="text-left">Buenos días</p>
      <span class="time-left">11:00</span>
    </div>
    <div class="container_chat">
      <p class="text-left">Podría ser más bajo el precio</p>
      <span class="time-left">11:00</span>
    </div>

    <div class="container_chat darker">
        <p class="text-right">Podria venderselo por 450 euros</p>
        <span class="time-right">11:01</span>
    </div>

    <div class="container_chat">
        <p class="text-left">Me lo pienso y te contesto</p>
        <span class="time-right">11:02</span>
    </div>

    <div class="container_chat darker">
        <p class="text-right">Vale</p>
        <span class="time-right">11:05</span>
    </div>

    <form class="form-search">
        <div class="input-append">
            <input type="text" class="span2 search-query top bottom"style="width: 40%; margin-left: 25%; margin-top: 20px">
            <button type="submit" class="btn btn-info">Enviar</button>
        </div>
    </form>


     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>