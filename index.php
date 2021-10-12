<html>

    <head>
        <title>Ingresar</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>
    
    <body class="bg-secondary">
        <div>
			<form class="bg-primary w-50 p-3 rounded mx-auto bg-gradient">
			<div id="formNumberID" class="form-text fs-1 fw-bold text-white-50 text-center">Log In</div>
			  <div class="mb-3">
				<label for="inputCorreo" class="form-label text-white fs-2 fw-bolder  user-select-none">Correo</label>
				<input type="email" class="form-control fs-4 fw-bold" id="inputCorreo">
			  </div>

			  <div class="mb-3">
				<label for="inputContra" class="form-label text-white fs-2 fw-bolder  user-select-none">Contraseña</label>
				<input type="password" class="form-control fs-4 fw-bold" id="inputContra">
			  </div>

			  <div class="row align-items-center">
				<button type="button" class="btn btn-secondary btn-lg fs-4 fw-bold text-white col" disabled>Cancelar</button>
				<button type="submit" class="btn btn-primary btn-lg fs-4 fw-bold text-white col">Guardar</button>
			  </div>

              <div class="entry">
				<p>¿Aun no esta registrado? puede hacerlo <a  style="color:#FF0000"; href="registro.php">aquí</a></p>
				</div>
			  </form>
		</div>
	</body>
</html>