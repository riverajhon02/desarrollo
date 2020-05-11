<!DOCTYPE html>

<?php include 'db.php'; 

$id= (int)$_GET['id'];

$sql = "select * from tasks where id='$id'";

$rows = $db->query($sql);

$row= $rows->fetch_assoc();
if(isset($_POST['send'])){

$task = htmlspecialchars($_POST['task']);

$sql2 ="update tasks set name='$task' where id ='$id'";

$db->query($sql2);

header('location: index.php');

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>bootstrap 4 sidebar</title>
  </head>
  <body>
   
   <div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header">
   			<h3>Auto Partes</h3>
   		</div>
   		
   		
   		<ul class="list-unstyled components">
   			<p>Proyecto Formativo</p>
   			<li class="active">
				<a class="dropdown-item" href="/php/privado/index.html">Inicio</a>
   			</li>
   			
   		    <li>
				<a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">Compras</a>
				<ul class="collapse list-unstyled" id="pageSubmenu1">
					<li>
						<a class="dropdown-item" href="#">Nueva Compras</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Historial De Compras</a>
					</li>
				</ul> 
			</li>
			<li>
				<a class="dropdown-item" href="/php/Productos/index.php">Productos</a>
			</li>
			<li>
				<a class="dropdown-item" href="#">Fabricantes</a>
			</li>
   			<li>
   				<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">Contactos</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu2">
   					<li>
   						<a class="dropdown-item" href="#">Clientes</a>
   					</li>
   					<li>
   						<a class="dropdown-item" href="#">Proveedores</a>
   					</li>
   				</ul> 
			</li>
			<li>
				<a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">Facturacion</a>
				<ul class="collapse list-unstyled" id="pageSubmenu3">
					<li>
						<a class="dropdown-item" href="#">Nueva Venta</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Administrar Facturas</a>
					</li>
				</ul> 
			</li>
			<li>
				<a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">Reportes</a>
				<ul class="collapse list-unstyled" id="pageSubmenu4">
					<li>
						<a class="dropdown-item" href="#">Reportes De Ventas</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Reportes De Compras</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Reporte De Inventarios</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Kardex</a>
					</li>
				</ul> 
			</li>
			<li>
				<a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">Configuracion</a>
				<ul class="collapse list-unstyled" id="pageSubmenu5">
					<li>
						<a class="dropdown-item" href="#">Perfil De La Empresa</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Monedas</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Impuestos</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Plantillas</a>
					</li>
				</ul> 
			</li>
			<li>
				<a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle dropdown-item">Administrar Accesos</a>
				<ul class="collapse list-unstyled" id="pageSubmenu6">
					<li>
						<a class="dropdown-item" href="#">Grupo De Usuarios</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Usuarios</a>
					</li>
				</ul> 
			</li>
   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
   				<a href="#" class="download dropdown-item">Descargas</a>
   			</li>
   			<li>
   				<a href="#" class="article dropdown-item">Articulos</a>
   			</li>
   		</ul>
   	</nav>
   	
   	<div class="content">
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   		
   		<button type="button" id="sidebarCollapse" class="btn btn-info">
   			<i class="fa fa-align-justify"></i>
   		</button>
   		
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Unos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Cerrar Session</a>
      </li>
    </ul>
  </div>
</nav>
  	
  	
    <!-- Comienza -->
	<div class="container">
			<center><h1>Actualizar Producto</h1></center>
			
		    	<div class="row" style="margin-top: 70px;">
			    	<div class="col-md-10 col-md-offset-1" >
				    	<table class="table">
				
					     	<hr><br>
								<form method="post" >
									<div class="form-group">
										<label>Producto</label>
										<input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
									</div>
										<input type="submit" name="send" value="Actualizar" class="btn btn-success">&nbsp;
								 		<a href="index.php" class="btn btn-warning">Volver</a>
								</form>
				    </div>
				</div>
	</div>

	<!-- Termina -->
	
	
   	</div>
	
   </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    
    
    
    
    
  </body>
</html>