<?php
include ("conexion.php");

$no_expediente = $_GET["expediente"];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contrato | SIVTT: Sistema de Información de Vinculación y Transferencia Tecnológica</title>
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
					            <div class="panel-title">Añadiendo un nuevo contrato para el expediente nro <?php echo $no_expediente; ?></div>        
								</div>
			  				<div class="content-box-large box-with-header">
			  					<form class="form-vertical" role="form" action="contrato_agregado.php" method="post">
									<legend>Datos del contrato</legend>
									<fieldset>
											<input type="hidden" name="no_expediente"  value="<?php echo $no_expediente; ?>">
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Monto total del contrato:</label>
													<div class="col-sm-6">
														<input type="number" class="form-control" id="inputEmail3" name="monto_total" min="1" required>
													</div>
											</div>
											
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Cantidad de cuotas:</label>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="inputEmail3" name="cuotas" min="1" required>
													</div>
											</div>
								   
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Unidad académica: </label>
													<div class="col-sm-6">
													<select class="form-control" name="unidad_academica">
																<option value="0">Seleccione:</option>
																<?php
																include ("conexion.php");
																  $query = $conn -> query ("SELECT id_ua,ua FROM unidades_academicas");
																  while ($valores = mysqli_fetch_array($query)) 
																  {
																	echo '<option value='.$valores['id_ua'].'>'.$valores['ua'].'</option>';
																  }
																?>
															  </select>
													</div>
											</div>
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Comitente: </label> 
													<div class="col-sm-6">
														<select name="comitente" class="form-control">
															<option value="0">Seleccione:</option>
															<?php
															  $query = mysqli_query ($conn, "SELECT * FROM comitente ORDER BY comitente");
															  while ($valores = mysqli_fetch_array($query)) {
																echo '<option data-id="'.$valores['id'].'">'.$valores['comitente'].'</option>';
															  }
															?> </select><br />
															<a href="#nogo" onclick="addElemento(getElementById('nuevocomitente').value, 'nuevocomitente', 'Nuevo comitente', 'comitente');" value="Añadir Elemento">Agregar nuevo comitente</a></p>
													<p id="nuevocomitente"></p>
													</div>
											</div>
													
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Unidad ejecutora: 	</label>
												<div class="col-sm-6">
												<select name="unidad_ejecutora" class="form-control">
													<option value="0">Seleccione:</option>
																<?php
																  $query = mysqli_query ($conn, "SELECT * FROM unidadejecutora ORDER BY unidadejecutora");
																  while ($valores = mysqli_fetch_array($query)) {
																	echo '<option data-id="'.$valores['id'].'">'.$valores['unidadejecutora'].'</option>';
																  }
																?> </select><br />
													<a href="#nogo" onclick="addElemento(getElementById('nuevaunidadejecutora').value, 'nuevaunidadejecutora', 'Nueva unidad ejecutora', 'unidad_ejecutora');" value="Añadir Elemento">Agregar nueva unidad ejecutora</a></p>
														<p id="nuevaunidadejecutora"></p>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-12 control-label">Descripción del contrato: </label>
													<div class="col-sm-6">
														<textarea class="form-control" rows="3" name="descripcion"></textarea>
													</div>
											</div>
										</fieldset>
										<legend>Departamento/Grupo/Laboratorio/Director</legend>
										<fieldset>
										   <div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Departamento: </label>  <div class="col-sm-6">
													<select name="depto" class="form-control">
																<option value="0">Seleccione:</option>
																<?php
																  $query = mysqli_query ($conn, "SELECT * FROM departamento ORDER BY departamento");
																  while ($valores = mysqli_fetch_array($query)) {
																	echo '<option data-id="'.$valores['id'].'">'.$valores['departamento'].'</option>';
																  }
																?> </select><br />
															<a href="#nogo" onclick="addElemento(getElementById('nuevodepartamento').value, 'nuevodepartamento', 'Nuevo departamento', 'depto');" value="Añadir Elemento">Agregar nuevo departamento</a></p>
															<p id="nuevodepartamento"></p>
												</div>
											</div>
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Grupo: </label>
												<div class="col-sm-6">													
													<select name="grupo" class="form-control">
														<option value="0">Seleccione:</option>
													<?php
													  $query = mysqli_query ($conn, "SELECT * FROM grupo ORDER BY grupo");
													  while ($valores = mysqli_fetch_array($query)) {
														echo '<option data-id="'.$valores['id'].'">'.$valores['grupo'].'</option>';
													  }
													?> </select><br />
													<a href="#nogo" onclick="addElemento(getElementById('nuevogrupo').value, 'nuevogrupo', 'Nuevo grupo', 'grupo');" value="Añadir Elemento">Agregar nuevo grupo</a></p>
													<p id="nuevogrupo"></p>
												</div>
											</div>
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Laboratorio: </label> 
												<div class="col-sm-6">	
												<select name="laboratorio" class="form-control">
															<option value="0">Seleccione:</option>
															<?php
															  $query = mysqli_query ($conn, "SELECT * FROM laboratorio ORDER BY laboratorio");
															  while ($valores = mysqli_fetch_array($query)) {
																echo '<option data-id="'.$valores['id'].'">'.$valores['laboratorio'].'</option>';
															  }
															?> </select><br />
														<a href="#nogo" onclick="addElemento(getElementById('nuevolaboratorio').value, 'nuevolaboratorio', 'Nuevo laboratorio', 'laboratorio');" value="Añadir Elemento">Agregar nuevo laboratorio</a></p>
														<p id="nuevolaboratorio"></p>
												</div>
											</div>
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Director: </label>
													<div class="col-sm-6">
														<select name="director" class="form-control">
																<option value="0">Seleccione:</option>
																<?php
																  $query = mysqli_query ($conn, "SELECT * FROM director ORDER BY director");
																  while ($valores = mysqli_fetch_array($query)) {
																	echo '<option data-id="'.$valores['id'].'">'.$valores['director'].'</option>';
																  }
																?> </select><br />
															<a href="#nogo" onclick="addElemento(getElementById('nuevodirector').value, 'nuevodirector', 'Nuevo director', 'director');" value="Añadir Elemento">Agregar nuevo director</a></p>
																	<p id="nuevodirector"></p>
													</div>
											</div>
											</fieldset>
									<legend>Plazo y Duración</legend>
										<fieldset>
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Desde</label>
													<div class="col-sm-6">
														<input type="date" value="plazo_desde" name="plazo_desde" class="form-control" required>
													</div>
											</div>
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Hasta</label>
													<div class="col-sm-6">
														<input type="date" value="plazo_desde" name="plazo_hasta" class="form-control" required>
													</div>
											</div>
											
											<div class="form-group">
												<label for="text-field" class="col-sm-12 control-label">Duración del contrato</label>
													<div class="col-sm-2">
														<input type="text" value="" name="duracion_dias" class="form-control" required> 
													</div>
													<div class="col-sm-4">
														<select class="form-control" name="duracion_tiempo">
    														
																<option value="días">Días</option>
																<option value="semanas">Semanas</option>
																<option value="meses">Meses</option>
																<option value="anios">Año/s</option>
															</select>
													</div>
											</div>
									</fieldset>
									<fieldset>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-primary">Añadir nuevo contrato</button>
											</div>
										</div>
									</fieldset>
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
		function addElemento(nuevoelem, id2, etiqueta, nombre){
		  var capa = document.getElementById(id2);
		  capa.innerHTML = '<label>'+etiqueta+':</label><div class="form-group has-success"><div class="input-group"><span class="input-group-addon"><i class="fa fa-dollar"></i></span><input type="text" value="" name="'+nombre+'" class="form-control"><span class="input-group-addon"><i class="fa fa-check"></i></span></div></div>';
		}
</script>


													
													
  </body>
</html>