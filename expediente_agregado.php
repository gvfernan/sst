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
					            <div class="panel-title">¡Expediente añadido!</div>        
								</div>
			  				<div class="content-box-large box-with-header">
<?php
include ("conexion.php");

// Acá comprueba que numero de expediente no vaya vacío aunque tenga un required en el formulario


$fecha_ingreso=$_POST['fecha_ingreso'];
$no_expediente=$_POST['no_expediente'];


//archivo
$directorio = "expediente/";
$archivo = $directorio .date('m-d-Y_hia') . basename ($_FILES["archivo_digital"]["name"]);
$temp_name  = $_FILES['archivo_digital']['tmp_name'];
move_uploaded_file($temp_name, $archivo);

$sql="INSERT INTO expediente (fecha_ingreso, no_expediente, archivo_digital) VALUES ('$fecha_ingreso','$no_expediente','$archivo')";
if (mysqli_query($conn, $sql)) 
  {
    //header("Location:expediente_agregado2.php?expediente=$no_expediente");
	echo "<script type=\"text/javascript\">window.location.href =(\"expediente_agregado2.php?expediente=".$no_expediente."\");</script>";

    
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }





  mysqli_close($conn);

?>
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