<!DOCTYPE html>
<html>
<head>
<title>Datatables | Ejemplo 2</title>
<link rel="stylesheet" type="text/css" href="css/datatables/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="css/datatables/bootstrap.css">
</head>
<body>

<?php require_once 'backend/getData.php'; 
$data = new GetData(); 
$data = $data->get();
?>
<table id="ejemplo1" class="table table-striped table-bordered">
	<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Edad</th>
				<th>Deporte</th>
			</tr>
	</thead>

	<tbody>

		<?php foreach ($data as $key => $value): ?>
			<tr>
				<td><?= $value['nombres'] ?></td>
				<td><?= $value['apellidos'] ?></td>
				<td><?= $value['edad'] ?></td>
				<td><?= $value['deporte'] ?></td>
			</tr>
		<?php endforeach ?>
		
		
	</tbody>

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