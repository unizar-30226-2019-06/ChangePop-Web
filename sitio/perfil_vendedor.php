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

    <div class="container top bottom" style="width: 90%; background-color: rgba(230, 240, 245, 0.9);margin-top:80px;">
        <div>
            <img class="img-circle" src="icono.jpg" style="width: 30%; margin-left:35%;">
        </div>
        <div>
            <label class="control-label"style="font-size: 2em; margin-left: 45%; margin-top: 20px">Manuel_56</label>  <!-- nombre del vendedor -->
        </div>
        <hr style="width:85%; border-color:black;">

        <label class="control-label"style="font-size: 2em; border: Solid #0f0fef 2px; padding: 0.5em;">Anuncios del usuario</label>
        
        <div class="row" style="margin-bottom:50px">
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

        <hr style="width:85%; border-color:black;">
        <label class="control-label"style="font-size: 2em; border: Solid #0f0fef 2px; padding: 0.5em;">Comentarios</label>
        <div  style="margin-bottom:50px">
            <div class="container_chat darker">
                <img class="col-md-4 img-circle" src="icono.jpg" style="width: 8%; vertical-align: middle; margin-bottom:;"></a>
                <label class="col-md-3 control-label"style="vertical-align: middle;font-size: 1.5em;">Paco_45</label></a>  <!-- nombre del vendedor -->
                <p class="text-left">Excelente vendedor</p>
            </div>

            <div class="container_chat darker">
                <img class="col-md-4 img-circle" src="icono2.jpg" style="width: 8%; vertical-align: middle; margin-bottom:;"></a>
                <label class="col-md-3 control-label"style="vertical-align: middle;font-size: 1.5em;">Carlos_98</label></a>  <!-- nombre del vendedor -->
                <p class="text-left">Comora sin ningun problema</p>
            </div>

            <div class="container_chat darker">
                <img class="col-md-4 img-circle" src="icono3.jpg" style="width: 8%; vertical-align: middle; margin-bottom:;"></a>
                <label class="col-md-3 control-label"style="vertical-align: middle;font-size: 1.5em;">Sofia_7473</label></a>  <!-- nombre del vendedor -->
                <p class="text-left">Comunicacion con el vendedor excelente</p>
            </div>
        
            <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height:600px top bottom">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Añadir comentario</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="span2 search-query top bottom"style="width: 95%; margin-left: 2.5%; margin-top: 10px; height:400px">
                            <button style="margin-top:30px" type="submit" class="btn btn-success btn-lg" data-dismiss="modal" aria-label="Close">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>

            <button style="vertical-align: middle;  margin-top:20px; width: 200px; margin-left:40%; margin-bottom:40px;" type="submit" class="btn btn-success btn-lg" data-toggle="modal" data-target="#miModal">Añadir comentario</button>

        </div>
    </div>   


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