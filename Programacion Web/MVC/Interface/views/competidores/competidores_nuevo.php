<!DOCTYPE html>
<html lang="es">
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
			
			<form id="nuevo" name="nuevo" method="POST" action="/mvc/index.php?c=competidores&a=guarda" autocomplete="off">
			<h2 class="form__title">AGREGAR USER</h2>		
				
				<div class="form__container">

					<div class="form__group">
						<input type="text" class="form__input" id="CI" name="CI" placeholder="Ej: 12345678" required minlength="8" maxlength="8" pattern="\d{8}">
						<label for="CI" class="form__label">Cedula</label>
						
					</div>
				
					<div class="form__group">
					<input type="text" class="form__input" id="nombreCom" name="nombreCom" placeholder="Ej: Alan Ezequiel" required maxlength="30">
						<label for="nombreCom" class="form__label">Nombre Completo</label>
					</div>
				
					<div class="form__group">
						<input type="text" class="form__input" id="apellidoCom" name="apellidoCom" placeholder="EJ: Jacinto Vera" required maxlength="30">
						<label for="apellidoCom" class="form__label">Apellido Completo</label>
					</div>
				
					<div class="form__group">
						<input type="date" class="form__input" id="fechaNac" name="fechaNac" required>
						<label for="fechaNac" class="form__label">Fecha Nacimiento</label>
					</div>
				
					<div class="form__group">
					<input type="text" class="form__input" id="altura" name="altura" placeholder="Ej: 1.75" required pattern="^(1|2)(\.\d{2})?$">
						<label for="altura" class="form__label">Altura</label>
					</div>

					<div class="form__group">
					<input type="text" class="form__input" id="peso" name="peso" placeholder="Ej: 68.3" required pattern="^(200|\d{1,2})(\.\d)?$">
						<label for="peso" class="form__label">Peso</label>
					</div>

					<div class="form__group">
						<select class="form__input" name="genero" id="genero">
							<option value="masculino">Masculino</option>
							<option value="femenino">Femenino</option>
							<option value="otro">Otro</option>
						</select>
						<label for="genero" class="form__label">Genero</label>
					</div>

					<div class="form__group">
						<input type="text" class="form__input" id="escuela" name="escuela" placeholder="EJ: Escuela Ibirocahy" required maxlenght="50" >
						<label for="escuela" class="form__label">Escuela</label>
					</div>

					<div class="form__group">
						<input type="text" class="form__input" id="dojo" name="dojo" placeholder="EJ: Tradicional Shito Ryu" required maxlenght="50">
						<label for="dojo" class="form__label">Dojo</label>
					</div>
				
					<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>

			
		</div>
	</body>
</html>