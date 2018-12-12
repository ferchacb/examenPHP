<?php 
try{
	$conexion = new PDO("mysql:host=localhost;dbname=examenfernanda","root","");
}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
	die();  
}

 
$where="";
$nombre=$_POST['nombre'];
$instrumento=$_POST['instrumento'];
$generomusi=$_POST['generomusi'];
 
//buscar
 
if (isset($_POST['buscar']))
{
 
 
 
	if (empty($_POST['instrumento']))
	{
		$where="where nombre like '".$nombre."%'";
	}
 
	else if (empty($_POST['nombre']))
	{
		$where="where instrumento='".$instrumento."'";
    }
    
 
	else
	{
		$where="where nombre like '".$nombre."%' and instrumento='".$instrumento."'";
	}
}
// bd consulta
 
$musico="SELECT * FROM musico $where $nombre";
$resMusicos=$conexion->query($musico);
$resInstrumento=$conexion->query($musico);
 
if(mysqli_num_rows($resMusicos)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}
?>
<html lang="es">
 
	<head>
		<title>Filtro de Búsqueda</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
 
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Filtro de Búsqueda</h2>
			</div>
		</header>
		<section>
			<form method="post">
				<input type="text" placeholder="Nombre..." name="nombre"/>
				<input type="text" placeholder="Instrumento..." name="instrumento"/>
 
				
				<button name="buscar" type="submit">Buscar</button>
			</form>
			<table class="table">
				<tr>
					<th>cedula</th>
					<th>Nombre</th>
					<th>apellido</th>

					<th>direccion</th>
                    <th>instrumento</th>
                    <th>generomusi</th>
                    <th>correo</th>
				</tr>
 
				<?php
 
				while ($registroMusicos = $resMusicos->fetch_array(MYSQLI_BOTH))
				{
 
					echo'<tr>
						 <td>'.$registroMusicos['Cedula'].'</td>
						 <td>'.$registroMusicos['nombre'].'</td>
						 <td>'.$registroMusicos['apellidos'].'</td>
                         <td>'.$registroMusicos['direccion'].'</td>
                         <td>'.$registroMusicos['instrumento'].'</td>
                         <td>'.$registroMusicos['generomusi'].'</td>
                         <td>'.$registroMusicos['correo'].'</td>
						 </tr>';
				}
				?>
			</table>
 
			<?
				echo $mensaje;
			?>
		</section>
	</body>
</html>