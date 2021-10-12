<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
<body>

<?php
	include("ConexionBD.php");
	$sql="select * from usuarios";
	$resultado=mysqli_query($conexion,$sql);
?>

	<h1>Usuarios registrados</h1><br>
	<a href="registro.php">Resgistro</a><br>
	<div>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<thead>
				<tr>
					<th>NOMBRE</th>
					<th>CORREO</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($filas=mysqli_fetch_assoc($resultado)) {
				?>
				<tr>
					<th><?php echo $filas['nombre']?></th>
					<th><?php echo $filas['correo']?></th>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<?php 
			mysqli_close($conexion);
		?>
	</div>
</body>
</html>