<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crear Usuario</title>
</head>
<body>
	<aside>
		<form>
			<h1>inserte estudiante</h1>
			<br>
			<br>
			<label>nombre del estudiante</label>
			<input type="text" name="nombre" required>
			<br>
			<br>
			<label>apellido del estudiante</label>
			<input type="text" name="apellido" required>
			<br>
			<br>
			<label>Cedula del estudiante</label>
			<input type="number" name="cedula" min="10000000" max="32000000" required>
			<br>
			<br>
			<button>Registrar</button>
		</form>
	</aside>
</body>
</html>