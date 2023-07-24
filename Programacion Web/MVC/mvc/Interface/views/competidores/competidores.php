<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="/mvc/Interface/assets/css/bootstrap.min.css">
		<script src="/mvc/Interface/assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="/mvc/index.php?c=competidores&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br>
			<br>
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>CI</th>
							<th>Nombre Completo</th>
							<th>Apellido Completo</th>
							<th>Fecha Nacimiento</th>
							<th>Altura</th>
							<th>Peso</th>
							<th>Genero</td>
							<th>Escuela</th>
							<th>Dojo</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["Competidores"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["CI"]."</td>";
							echo "<td>".$dato["nombreCom"]."</td>";
							echo "<td>".$dato["apellidoCom"]."</td>";
							echo "<td>".$dato["fechaNac"]."</td>";
							echo "<td>".$dato["altura"]."</td>";
							echo "<td>".$dato["peso"]."</td>";
							echo "<td>".$dato["genero"]."</td>";
							echo "<td>".$dato["escuela"]."</td>";
							echo "<td>".$dato["dojo"]."</td>";
							echo "<td><a href='/mvc/index.php?c=competidores&a=modificar&ID=".$dato["ID"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='/mvc/index.php?c=competidores&a=eliminar&ID=".$dato["ID"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>