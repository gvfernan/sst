<?php
include ("conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Expediente | SIVTT: Sistema de Información de Vinculación y Transferencia Tecnológica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">SIVTT</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                      
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta  <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="login.html">Cerrar sesión</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    <div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i>Inicio</a></li>
                    <li><a href="expediente.php"><i class="glyphicon glyphicon-calendar"></i> Nuevo expediente</a></li>
					<li><a href="buscador.php"><i class="glyphicon glyphicon-calendar"></i>Buscar y editar un expediente</a></li>

                 </ul>
                    </li>
                </ul>
             </div>
		  </div>
	 <div class="col-md-10">
		<div class="row">
	  				<div class="col-md-12">
	  					<div class="col-md-12 panel-info">
			  				<div class="content-box-header panel-heading">
					            <div class="panel-title">Añadiendo un nuevo expediente</div>        
								</div>
			  				<div class="content-box-large box-with-header">
			  					<form class="form-horizontal" role="form" action="expediente_agregado.php" method="post" enctype="multipart/form-data">
								  <div class="form-group">
								    <label for="fecha_de_ingreso" class="col-sm-2 control-label">Fecha de ingreso:</label>
								    <div class="col-sm-6">
								      <input type="date" value="" name="fecha_ingreso" class="form-control" data-format="d-m-y" data-date="today" required>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Número de expediente:</label>
								    <div class="col-sm-6">
								      <input type="text" class="form-control" id="inputEmail3" name="no_expediente" required placeholder="XX-XXXXX-XXXX" onkeypress="this.value = mask(this.value)" maxlength="13" pattern="^[0-9]{2}-[0-9]{5}-[0-9]{4}$">
								    </div>
								  </div>
								  <div class="form-group">
								    	<label class="col-md-2 control-label">Expediente digital:</label>
											<div class="col-md-6">
												<input type="file" class="btn btn-default" id="exampleInputFile1" name="archivo_digital" required>
												<p class="help-block">
													Haga clic en "Seleccionar archivo para adjuntar"
												</p>
											</div>
								  </div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary" name="submit">Añadir nuevo expediente</button>
									</div>
								</div>
								</form>
								
							</div>
						</div>
					</div>
		</div>
   
	</div>
	</div>
	</div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2021 | SIVTT - Sistema de Información de Vinculación y Transferencia Tecnológica | Subsecretaria de Vinculación y Transferencia Tecnológica <br>Universidad Nacional de Mar del Plata<br>Diag. Alberdi 2695, Mar del Plata. Buenos Aires. Argentina.
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
function mask(valor) {

 if (valor.match(/^[0-9]{2}$/g) !== null) {
    return valor+'-';
  } else if (valor.match(/^[0-9]{2}-{1}[0-9]{5}$/g) !== null) {
    return valor+'-';
  }
  
    var cadena = '';
    var only = '1234567890-';
    for (var i=0; i<valor.length; i++)
       if (only.indexOf(valor.charAt(i)) != -1) 

	     cadena += valor.charAt(i); 
  
  return cadena;
  }
</script>
  </body>
</html>
