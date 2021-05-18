<?php
include ("conexion.php");

$no_expediente = $_GET["expediente"];
$id_contrato = $_GET["id_contrato"];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Presupuesto | SIVTT: Sistema de Información de Vinculación y Transferencia Tecnológica</title>
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
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
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
					            <div class="panel-title">Añadiendo un nuevo presupuesto</div>        
								</div>
			  				<div class="content-box-large box-with-header">
			  					<form class="form-horizontal" role="form" action="presupuesto_agregado.php" method="post" enctype="multipart/form-data">
								  <input type="hidden" name="no_expediente"  value="<?php echo $no_expediente; ?>">
									<input type="hidden" name="id_contrato"  value="<?php echo $id_contrato; ?>">
								  
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Monto total del presupuesto:</label>
								    <div class="col-sm-6">
								      <input type="number" class="form-control" id="inputEmail3"  name="monto_total" min="1" required>
								    </div>
								  </div>
								  
								   <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Año de ingreso de fondos: </label>
								    <div class="col-sm-6">
								      <input type="year" class="form-control" id="inputEmail3"  name="fondos_anio">
								    </div>
								  </div>
								  
								   <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Costos directos: : </label>
								    <div class="col-sm-6">
								      <input type="number" class="form-control" id="inputEmail3"  name="costos_directos" min="1" step="0.01" required>
								    </div>
								  </div>
								  
								   <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Monto Beneficio Universitario BU: </label>
								    <div class="col-sm-6">
								      <input type="number" class="form-control" id="inputEmail3"  name="monto_bu" min="1" step="0.01" required>
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Monto Beneficio Universitario BUA: </label>
								    <div class="col-sm-6">
								      <input type="number" class="form-control" id="inputEmail3"  name="monto_bua" min="1" step="0.01" required>
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Monto Beneficio Universitario BUE: </label>
								    <div class="col-sm-6">
								      <input type="number" class="form-control" id="inputEmail3"  name="monto_bue" min="1"  step="0.01" required>
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Monto Costos Directos a adquirir vía Suministro: </label>
								    <div class="col-sm-6">
								      <input type="number" class="form-control" id="inputEmail3"  name="monto_suministro" min="1" step="0.01" required>
								    </div>
								  </div>
								  <div class="form-group">
								  <div class="col-sm-6">
								  <p><label>Adjuntar archivos: </label><a href="<?php echo "adjuntos_presupuesto.php?expediente=$no_expediente&id_contrato=$id_contrato" ?>" target="_blank"> Haga clic aquí para adjuntar</a> <!-- adjuntar varios archivos y permitir describirlos con una lista-->
								  </div>
								  </div>
								  
								 <div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Observaciones</label>
													<div class="col-sm-6">
														<textarea class="form-control" rows="3" name="observaciones"></textarea>
													</div>
								</div>						  
								  
								  
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">Cargar presupuesto</button>
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
  </body>
</html>