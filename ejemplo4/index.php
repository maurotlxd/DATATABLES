<!DOCTYPE html>
<html>
<head>
<title>Datatables | Ejemplo 3</title>
<link rel="stylesheet" type="text/css" href="css/datatables/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="css/datatables/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<legend></legend>
<input type="button" value="Editar Registro" id="editar"> <input type="button" value="Eliminar Registro" id="eliminar">
<legend></legend>
<table id="ejemplo1" class="table  table-bordered">
	<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Edad</th>
				<th>Deporte</th>
			</tr>
	</thead>



	<tfoot>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Edad</th>
				<th>Deporte</th>
			</tr>
	</tfoot>
</table>



<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/datatables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>