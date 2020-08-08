<!DOCTYPE html>
<html>
<head>
	<title>Data Tables</title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
</head>
<body>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table table-stripped" id="myTable">
					<thead>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
					</thead>
					<tfoot>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
					</tfoot>
					<tbody>
						<tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Asif</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>hammad</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>Fahad</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>2</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>3</td>
							<td>SEO</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Ali</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Yahoo</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr><tr>
							<td>1</td>
							<td>Usman</td>
							<td>abc@gmail.com</td>
							<td>03323134231</td>
						</tr>
					</tbody>

				</table>
			</div>
		</div>
	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>


	{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready( function () {
    $('#myTable').DataTable();
});
	</script>
</body>
</html>