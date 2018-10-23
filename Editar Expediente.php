<?php
session_start();

include('../../../serv.php');
if(!isset($_SESSION["user"])) {
 header("location:../../SAES/login.php");
} else {}


    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_expediente where Id_Expediente ='$id'";
    $resultado=mysql_query($sql);
    $mostrar=mysql_fetch_array($resultado);
					   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SAES</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="../../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="../../../css/style2.css" rel="stylesheet">
	<link id="base-style-responsive" href="../../../css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>

		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a><img src="../../../Logos DES/SES_PORT_600_blanco.png" width="60" height="60">Sistema de Administración de Educación Superior
                
              <!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
						        					
						<!-- start: User Dropdown -->




						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <span><?php echo $_SESSION['Nombre'];?></span>
                                
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Editar Cuenta</span>
								</li>
								<li><a href="../../../CambiarPassword.php"><i class="halflings-icon user"></i> Cambiar Contraseña</a></li>
								<li><a href="../../logout.php"><i class="halflings-icon off"></i> Salir</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
<!-- Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="../../../../SAES/index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Inicio</span></a></li>
                        <li><a  href="../../Solicitudes/Solicitud.php"><i class="fa fa-pencil-square-o"></i><span class="hidden-tablet"> LLenar Solicitud</span></a></li>
							
						<li>
						<a class="dropmenu" href="#"><i class="fa fa-file-text-o"></i><span class="hidden-tablet"> Ingresar Documentos</span></a>
							<ul>
								
								<li><a class="submenu" href="../../Reconocimiento/Ingresar Documentos/Documentos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Reconocimiento</span></a></li>
                                <li><a class="submenu" href="../../Incoporacion/Ingresar Documentos/Documentos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Incorporación</span></a></li>
                                <li><a class="submenu" href="../../Homologacion/Ingresar Documentos/Documentos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Homologación</span></a></li>
                                <li><a class="submenu" href="Documentos.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Auténticas</span></a></li>
							</ul>	
						</li>
                        
                        
                        <li>						
                            <a href="../../Gestiones Aprobadas/Aprobacion.php"><i class="fa fa-check-square-o"></i><span class="hidden-tablet"> Confirmar Solicitud</span></a>                        
						</li>
						<!--<li>a class="dropmenu" href="#"><i class="fa fa-check-square-o"></i><span class="hidden-tablet"> Confirmar Solicitud</span></a>
							<ul>
                             <li><a class="submenu" href="../../Gestiones Aprobadas/Aprobacion.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Reconocimiento</span></a></li> 
                            </ul>	
						</li<li>-->
                        
						<li>
						<a class="dropmenu" href="../../Dictamen Academica/Profeso.php"><i class="fa fa-folder-open"></i><span class="hidden-tablet"> Revisar Documentos</span></a>
							<ul>
								 <li><a class="submenu" href="../../Revision/Reconocimiento/reconocimiento.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Reconocimiento</span></a></li>
                                <li><a class="submenu" href="../../Revision/Incorporacion/incorporacion.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Incorporación</span></a></li>  
                                 <li><a class="submenu" href="../../Revision/Homologacion/homologacion.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Homologación</span></a></li>  
                                  <li><a class="submenu" href="../../Revision/Autentica/Autentica.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Auténticas</span></a></li>
                                               
							</ul>	
						</li>
						
						<li>
						<li>						
                            <a href="Revisar Expediente.php"><i class="fa fa-child"></i><span class="hidden-tablet"> Revisar Datos Personales</span></a>                        
						</li>
						 <li><a href="../../Dictamen Tecnico/Tecnico.php"><i class="fa fa-gavel"></i><span class="hidden-tablet"> Dictamen Técnico</span></a></li> 
                                <li><a href="../../Resumen Gestiones/Subir Resumen.php"><i class="fa fa-upload"></i><span class="hidden-tablet"> Subir Resumen</span></a></li>
                        <li>
						<a class="dropmenu" href="#"><i class="fa fa-university"></i><span class="hidden-tablet"> Dictamen </span></a>
							<ul>
								
                                <li><a class="submenu" href="../../Dictamen Academica/Profeso.php"><i class="icon-file-alt"></i><span class="hidden-tablet"> Incorporación</span></a></li> 
                                                     
							</ul>	
						</li>
                        <li><a  href="../../Traslado_Documentos/Traslados.php"><i class="fa fa-exchange"></i><span class="hidden-tablet"> Traslado de Documentos</span></a></li> 
						<li><a href="../../../Ver Traslados.php"><i class="fa fa-info-circle"></i><span class="hidden-tablet"> Ver Traslados</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- Fin Menu -->
			
			
			
			
			
			<!-- start: Content -->
		<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="../../../index_VE.php">Escritorio</a> 
					<i class="icon-angle-right"></i>
				</li>
			</ul>
			

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Datos Personales</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					    
						<form class="form-horizontal" id="formulario" method="post" action="../../../index_VE.php" >
                        <fieldset>                     
                        
                         <table width="200" border="0">
  <tr>
    <td> <div class="control-group">
						<label class="control-label" for="focusedInput">Nombre:</label>                        
                        <div class="controls">
						<input  class="text" type="text" name="nombre" id="nombre" onkeyup="this.value=this.value.toUpperCase();" required value="<?php echo "$mostrar[Nombre]"; ?>">						</div>
                        </div></td>
    <td> <div class="control-group">
						<label class="control-label" for="selectError3">Genero:</label>
                        <div class="controls">
                        <select name="genero" id="genero">
                           <option ><?php echo "$mostrar[Genero]"; ?></option>
						   <option >Masculino</option>
						   <option >Femenino</option>
						</select>
						</div>
						</div></td>
  </tr>
  <tr>
    <td> <div class="control-group">
						<label class="control-label" for="selectError3">Tipo Identificación:</label> 
                        <div class="controls">
							<?php 
                             include'../../../serv.php';
                             $dat="SELECT * FROM tbl_tipo_identificacion";
                             $sql=mysql_query($dat);
                            ?>
                        <select name="ident" id="ident" required>
                             <?php
                              while($lista=mysql_fetch_array($sql)) 
                              echo "<option  value='".$lista["Id_Tipo_Identificacion"]."'> ".$lista["Tipo_Identificacion"]." </option>";                             ?>
						 </select>
						 </div>
                         </div></td>
    <td><div class="control-group">
						 <label class="control-label" for="disabledInput">Número Identificación:</label>
                         <div class="controls">
						 <input  class="text" type="text" name="identificacion" id="identificacion" required  value="<?php echo "$mostrar[Numero_Identificacion]"; ?>">
						 </div>
						 </div></td>
  </tr>
  <tr>
    <td>   <div class="control-group">
						 <label class="control-label" for="selectError3">Estado Civil:</label>
                         <div class="controls">
						   <select name="civil" id="civil" required>
						     <option ><?php echo "$mostrar[Estado_Civil]"; ?></option>
							 <option >Soltero(a)</option>
							 <option >Casado(a)</option>
						   </select>
						 </div>
						 </div></td>
    <td><div class="control-group">
		<label class="control-label" for="focusedInput">Pais:</label>
        <div class="controls">
		<input  class="text" type="text" name="pais" id="pais" required onkeyup="this.value=this.value.toUpperCase();" required value="<?php echo "$mostrar[Pais]"; ?>">
		</div>
		</div></td>
  </tr>
  <tr>
    <td><div class="control-group">
		<label class="control-label" for="focusedInput">Nacionalidad:</label>
        <div class="controls">
		<input class="text" type="text" name="nacionalidad" id="nacionalidad" onkeyup="this.value=this.value.toUpperCase();" required value="<?php echo "$mostrar[Nacionalidad]"; ?>">
		</div>
		</div></td>
    <td><div class="control-group">
		<label class="control-label" for="selectError3">Departamento:</label>
        <div class="controls">
           <?php 
            include'../../../serv.php';
            $dat="SELECT * FROM tbl_departamento";
            $sql=mysql_query($dat);
           ?>
		<select name="depto" id="depto" required>
		  <?php 
		  $dep=$mostrar['Id_Departamento'];
          $depar="SELECT * FROM tbl_departamento WHERE Id_Departamento = '$dep'";
          $re=mysql_query($depar); 
          $row=mysql_fetch_array($re);
		  ?>
		  <option value="$dep"><?php echo "$row[Departamento]"; ?></option>
		  <?php
            while($lista=mysql_fetch_array($sql)) 
            echo "<option  value='".$lista["Id_Departamento"]."'> ".$lista["Departamento"]." </option>"; 
          ?>
		</select>
		</div>
		</div></td>
  </tr>
  <tr>
    <td><div class="control-group">
		<label class="control-label" for="disabledInput">Dirección:</label>
        <div class="controls">
		<input class="text" type="text" name="direccion" id="direccion" onkeyup="this.value=this.value.toUpperCase();"required value="<?php echo "$mostrar[Direccion]"; ?>" >
		</div>
		</div></td>
    <td><div class="control-group">
		<label class="control-label" for="disabledInput">Número Celular:</label>
        <div class="controls">
		<input  class="text" type="number" name="celular" id="celular" required value="<?php echo "$mostrar[Celular]"; ?>">
		</div>
		</div></td>
  </tr>
  <tr>
    <td><div class="control-group">
		<label class="control-label" for="disabledInput">Correo Electronico:</label>
        <div class="controls">
		<input class="text" type="email" name="correo" id="correo" requiered="required" value="<?php echo "$mostrar[Correo_Electronico]"; ?>">
		</div>
		</div></td>
    <td></td>
  </tr>
   <tr>
    <td><div class="control-group">
		<label class="control-label" for="disabledInput">Modificado Por:</label>
        <div class="controls">
		<input  type="text" name="fechas" id="fechas"  value="<?php echo $_SESSION['user'];?>" readonly >				
		</div>
		</div></td>
    <td><div class="control-group">
		<label class="control-label" for="disabledInput">Fecha:</label>
        <div class="controls">
		<input  type="text" name="fechac" id="fechac"  value="<?php echo ''. date('d-m-Y') ."\n";?>" readonly >
		</div>
		</div></td>
  </tr>
</table>

                       
							  
			 <div class="form-actions">			   
             <div id="agrega-registros">
              <input class="btn btn-large btn-warning" type="submit" id="guardar" name="submit" value="Aceptar">
             
             </div>
             </div>
   
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
        
		      
                  

                
	       
   
    
 
  
     	   

			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
        </div>
	
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2016 <a href="https://des.unah.edu.hn/" alt="DES">Dirección de Educación Superior</a></span>
			
		</p>

	</footer>
	
	
	<!-- start: JavaScript-->
		<script src="../../../js/jquery-1.9.1.min.js"></script>
	<script src="../../../js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="../../../js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="../../../js/jquery.ui.touch-punch.js"></script>
	
		<script src="../../../js/modernizr.js"></script>
	
		<script src="../../../js/bootstrap.min.js"></script>
	
		<script src="../../../js/jquery.cookie.js"></script>
	
		<script src='../../../js/fullcalendar.min.js'></script>
	
		<script src='../../../js/jquery.dataTables.min.js'></script>

		<script src="../../../js/excanvas.js"></script>
	<script src="../../../js/jquery.flot.js"></script>
	<script src="../../../js/jquery.flot.pie.js"></script>
	<script src="../../../js/jquery.flot.stack.js"></script>
	<script src="../../../js/jquery.flot.resize.min.js"></script>
	
		<script src="../../../js/jquery.chosen.min.js"></script>
	
		<script src="../../../js/jquery.uniform.min.js"></script>
		
		<script src="../../../js/jquery.cleditor.min.js"></script>
	
		<script src="../../../js/jquery.noty.js"></script>
	
		<script src="../../../js/jquery.elfinder.min.js"></script>
	
		<script src="../../../js/jquery.raty.min.js"></script>
	
		<script src="../../../js/jquery.iphone.toggle.js"></script>
	
		<script src="../../../js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="../../../js/jquery.gritter.min.js"></script>
	
		<script src="../../../js/jquery.imagesloaded.js"></script>
	
		<script src="../../../js/jquery.masonry.min.js"></script>
	
		<script src="../../../js/jquery.knob.modified.js"></script>
	
		<script src="../../../js/jquery.sparkline.min.js"></script>
	
		<script src="../../../js/counter.js"></script>
	
		<script src="../../../js/retina.js"></script>

		<script src="../../../js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>