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
          <a href="suscribir.php">No tienes cuenta ?</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


    <div class="container">
      <h1>Anuncios :</h1>
                 <form method="post" action="contact.php" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nombre</label>  
                        <div class="col-md-3">
                        <input id="nombre" name="nombre" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Apellido</label>  
                        <div class="col-md-3">
                        <input id="apellido" name="apellido" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                </div>
                        <br>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">NIP :</label>  
                        <div class="col-md-1">
                            <input id="nip" name="nip" class="form-control input-md" required="" type="number">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Contrasena :</label>  
                        <div class="col-md-1">
                            <input id="contrasena" name="contrasena" class="form-control input-md" required="" type="password">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Confirma :</label>  
                        <div class="col-md-1">
                            <input id="confirmacion" name="confirmacion" class="form-control input-md" required="" type="password">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Correo</label>  
                        <div class="col-md-3">
                        <input id="correo" name="correo" class="form-control input-md" required="" type="text">
                        </div>
                    </div>
                </div>
                        
                <br>
                    <button class="col-md-offset-5 btn btn-info" type="submit"><span class="glyphicon glyphicon-ok-sign"></span> Suscribir !</button>
                </fieldset>
                </form>
        </div>
        
        
      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


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
