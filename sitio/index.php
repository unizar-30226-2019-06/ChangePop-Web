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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Buscar :</h1> 
            <p class="lead"></p>

                <form method="post" action="contact.php" enctype="multipart/form-data" class="form-horizontal">
                <fieldset>

                <div class="row">
                <div class="form-group">
                    <label class="col-md-2 control-label">Qué buscas ?</label>  
                    <div class="col-md-3">
                    <input id="busqueda" name="busqueda" class="form-control input-md" required="" type="text">
                    </div>
                    <label class="col-md-2 control-label">Dondé ?</label>  
                    <div class="col-md-3">
                    <input id="lugar" name="lugar" class="form-control input-md" required="" type="text">
                    </div>
                    </div>
                    </div>
                    <br>

                    <div class="row">
                    <div class="form-group">
                    <label class="col-md-2 control-label">Precio Min :</label>  
                    <div class="col-md-1">
                        <input id="busqueda" name="busqueda" class="form-control input-md" required="" type="number">
                    </div>
                    <label class="col-md-1 control-label">Max :</label>  
                    <div class="col-md-1">
                        <input id="lugar" name="lugar" class="form-control input-md" required="" type="number">
                    </div>
                    
                    <label class="col-md-2 control-label">Categoría :</label>  
                    <div class="col-md-1">
                        <select name="categoria" id="categoria">
                                <option value="todas">Todas</option>
                                <option value="tec">Tecnologia</option>
                                <option value="al">Alojamiento</option>
                                <option value="otra">Otra</option>
                                        
                        </select>
                    </div>
                    
                </div>
                </div>
                <br>
                    <button class="col-md-offset-5 btn btn-info" type="submit"><span class="glyphicon glyphicon-ok-sign"></span> Envoyer !</button>
                </fieldset>
                </form>

      </div>
    </div>

    <div class="container">
      <h1>Anuncios :</h1>
      <!--primera linea -->
        <div class="row">
            <a href="verAnuncio.php" class="anuncio"><div class="col-md-6">
            <h2>Vendo mi play</h2>
                <div class="row">
                    <div class="col-md-6">
                        <em>Precio : 550€ - Puesto hace 3 horas</em> 
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>
                        
                    <div class="col-md-6">
                        <img src="anuncioEjemplo.png" style="border: solid 2px white; width:100%;">
                    </div>
                </div>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div></a>
            
            <a href="verAnuncio.php" class="anuncio"><div class="col-md-6">
            <h2>movil</h2>
                <div class="row">
                    <div class="col-md-6">
                        <em>Precio : 250€ - Puesto hace 5 horas</em> 
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>
                        
                    <div class="col-md-6">
                        <img src="anuncioEjemplo2.png" style="border: solid 2px white; width:100%;">
                    </div>
                </div>
            </div>
        </div></a>

        <!-- segunda linea, etc -->
        <div class="row">
            <a href="verAnuncio.php" class="anuncio"><div class="col-md-6">
            <h2>play 4</h2>
                <div class="row">
                    <div class="col-md-6">
                        <em>Precio : 350€ - Puesto hace 7 horas</em> 
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>
                        
                    <div class="col-md-6">
                        <img src="anuncioEjemplo2.png" style="border: solid 2px white; width:100%;">
                    </div>
                </div>
            </div></a>
             
            <a href="verAnuncio.php" class="anuncio"><div class="col-md-6">
            <h2>movil barrato</h2>
                <div class="row">
                    <div class="col-md-6">
                        <em>Precio : 100€ - Puesto hace 8 horas</em> 
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>
                        
                    <div class="col-md-6">
                        <img src="anuncioEjemplo.png" style="border: solid 2px white; width:100%;">
                    </div>
                </div>
            </div></a>
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
