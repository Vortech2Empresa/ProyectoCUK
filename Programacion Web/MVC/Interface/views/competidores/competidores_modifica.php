<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="/mvc/Interface/assets/css/bootstrap.min.css">
		<script src="/mvc/Interface/assets/js/bootstrap.min.js" ></script>

		<!-- Connections -->
		<link rel="stylesheet" href="/mvc/Interface/assets/css/compNuevo.css">
	</head>
	
	<body>
		<div class="cont">
			<form id="nuevo" name="nuevo" method="POST" action="/mvc/index.php?c=competidores&a=actualizar" autocomplete="off">
			
				<h2 class="form__title">MODIFICAR USER</h2>	
				<input type="hidden" id="ID" name="ID" value="<?php echo $data["ID"]; ?>" />

				<div class="form__container">

					<div class="form__group">
						<input type="text" class="form__input" id="CI" name="CI" value="<?php echo $data["Competidores"]["CI"]?>" required minlength="8" maxlength="8" pattern="\d{8}">
						<label for="CI" class="form__label">Cedula</label>
					</div>
				
					<div class="form__group">
					<input type="text" class="form__input" id="nombreCom" name="nombreCom" value="<?php echo $data["Competidores"]["nombreCom"]?>">
						<label for="nombreCom" class="form__label">Nombre Completo</label>
					</div>
				
					<div class="form__group">
						<input type="text" class="form__input" id="apellidoCom" name="apellidoCom" value="<?php echo $data["Competidores"]["apellidoCom"]?>">
						<label for="apellidoCom" class="form__label">Apellido Completo</label>
					</div>
				
					<div class="form__group">
						<input type="date" class="form__input" id="fechaNac" name="fechaNac" value="<?php echo $data["Competidores"]["fechaNac"]?>">
						<label for="fechaNac" class="form__label">Fecha Nacimiento</label>
					</div>
				
					<div class="form__group">
					<input type="text" class="form__input" id="altura" name="altura" placeholder="Ej: 1.75" value="<?php echo $data["Competidores"]["altura"]?>">
						<label for="altura" class="form__label">Altura</label>
					</div>

					<div class="form__group">
					<input type="text" class="form__input" id="peso" name="peso" placeholder="Ej: 68.3" value="<?php echo $data["Competidores"]["peso"]?>">
						<label for="peso" class="form__label">Peso</label>
					</div>

					<div class="form__group">
						<select class="form__input" name="genero" id="genero" value="<?php echo $data["Competidores"]["genero"]?>">
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
							<option value="otro">Otro</option>
						</select>
						<label for="genero" class="form__label">Genero</label>
					</div>

					<div class="form__group">
						<input type="text" class="form__input" id="escuela" name="escuela" value="<?php echo $data["Competidores"]["escuela"]?>">
						<label for="escuela" class="form__label">Escuela</label>
					</div>

					<div class="form__group">
						<input type="text" class="form__input" id="dojo" name="dojo" value="<?php echo $data["Competidores"]["dojo"]?>">
						<label for="dojo" class="form__label">Dojo</label>
					</div>
				
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
				
		</body>
	</html>		