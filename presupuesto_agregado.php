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
					            <div class="panel-title">Resultado del expediente añadido</div>        
								</div>
			  				<div class="content-box-large box-with-header">
<?php
include ("conexion.php");

// obtengo todos los archivos
$amountFiles = count($_FILES['miarchivo']['name']);
	//archivo
	for($i=0; $i<=$amountFiles; $i++)
	{
		if(!empty($_FILES['miarchivo']['name'][$i]))
		{
			$directorio = "adjuntos_presupuesto/";
			$archivo = $directorio.date('m-d-Y_hia').$_FILES['miarchivo']['name'][$i];
			$temp_name  = $_FILES['miarchivo']['tmp_name'][$i];
			move_uploaded_file($temp_name, $archivo);
		}
	}

$no_expediente=$_POST['no_expediente'];
$id_contrato=$_POST['id_contrato'];
$monto_total=$_POST['monto_total'];
$fondos_anio=$_POST['fondos_anio'];
$costos_directos=$_POST['costos_directos'];
$monto_bu=$_POST['monto_bu'];
$monto_bua=$_POST['monto_bua'];
$monto_bue=$_POST['monto_bue'];
$monto_suministro=$_POST['monto_suministro'];
$observaciones=$_POST['observaciones'];

$sql="INSERT INTO presupuesto (no_expediente,id_contrato,monto_total,fondos_anio,costos_directos,monto_bu,monto_bua,monto_bue,monto_suministro,observaciones) VALUES ('$no_expediente','$id_contrato','$monto_total','$fondos_anio','$costos_directos','$monto_bu','$monto_bua','$monto_bue','$monto_suministro','$observaciones')";
if (mysqli_query($conn, $sql)) 
  {
    echo "Puede agregar otro contrato para este expediente o volver al inicio";
	echo "<script type=\"text/javascript\">window.location.href =(\"presupuesto_agregado2.php?expediente=".$no_expediente."\");</script>";

		    
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