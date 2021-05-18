<?php
include ("conexion.php");

$no_expediente = $_GET["expediente"];
$id_contrato = $_GET["id_contrato"];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Adjuntar | SIVTT: Sistema de Información de Vinculación y Transferencia Tecnológica</title>
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

		  <div class="col-md-12">
				<div class="row">
	  				<div class="col-md-12">
	  					<div class="col-md-12 panel-info">
			  				<div class="content-box-header panel-heading">
					            <div class="panel-title">Añadir adjuntos</div>        
								</div>
			  				<div class="content-box-large box-with-header">
		      		<form method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
						<input type="hidden" name="no_expediente"  value="<?php echo $no_expediente; ?>">
						<input type="hidden" name="id_contrato"  value="<?php echo $id_contrato; ?>">
						 <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Tipo:</label>
								    <div class="col-sm-6">
								     <p><input list="tipo" name="tipo" class="form-control" />
										<datalist id="tipo">
											<option value="nota_costos_director_subsidios">Nota Solicitud Costos Directos/Subsidio</option>
											<option value="nota_expediente_rendicion">Nota Solicitud Expte. Rendición</option>
											<option value="nota_honorarios_recibo_de_sueldo">Nota Solicitud Honorarios Recibo Sueldo</option>
											<option value="nota_solicitud_honorarios_factura">Nota Solicitud Honorarios Factura</option>
											<option value="nota_solicitud_beat">Nota Solicitud B.E.A.T.</option>
										</datalist>
								    </div>
								  </div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Observaciones: </label>
								<div class="col-sm-6">
									<textarea class="form-control" rows="3" name="observaciones"></textarea>
								</div>
						</div>
						<div class="form-group">
						   	<label class="col-md-2 control-label">Archivo digital:</label>
								<div class="col-md-6">
									<input type="file" class="btn btn-default" id="exampleInputFile1" name="archivo_digital" required>
										<p class="help-block">
													Haga clic en "Seleccionar archivo para adjuntar"
										</p>
								</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary" name="submit">Añadir adjunto</button>
							</div>
						</div>
						<?php

						include ("conexion.php");
								if(isset($_POST['submit'])) {
									$no_expediente=$_POST['no_expediente'];
									$id_contrato=$_POST['id_contrato'];
									$tipo=$_POST['tipo'];
									$observaciones=$_POST['observaciones'];
									//archivo
									$directorio = "adjuntos_presupuesto/";
									$archivo = $directorio .date('m-d-Y_hia') . basename ($_FILES["archivo_digital"]["name"]);
									$temp_name  = $_FILES['archivo_digital']['tmp_name'];
									move_uploaded_file($temp_name, $archivo);

								$sql="INSERT INTO adjuntos_presupuesto (no_expediente, id_contrato, tipo, observaciones, archivo_digital) VALUES ('$no_expediente','$id_contrato','$tipo','$observaciones','$archivo')";
								
								if (mysqli_query($conn, $sql)) 
								  {
									echo "<div style=color:#222222 !important;font-weight=600;>Archivo cargado. Puede cargar otro archivo o cerrar esta pestaña</div>";
									
								  } 
								  else 
									{
									echo "Error: " . $sql . "<br>" . mysqli_error($conn);
									}
								}
								else
									{
								echo "No se han cargado archivos";	
									}

								  mysqli_close($conn);
						?>
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



    
