<?php
	include "connect.php";
	$getUsers = $conn->prepare("SELECT * FROM users");
	$getUsers->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>users</title>

	<!-- jQuery -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- Datatable Scripts -->
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>


	<style>
		.container{
			width: 80%;
			margin: 20px auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<table id="myTable">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
			</thead>
			<tbody>
				<?php
					$users = $getUsers->fetchAll();
					if(count($users) > 0 ){
						foreach ($users as $user) {
							echo "
							<tr>
								<td>{$user['id']}</td>
								<td>{$user['name']} {$user['surname']}</td>
								<td><a href='mailto:{$user['email']}'>{$user['email']}</a></td>
								<td><a href='tel: {$user['phone']}'>{$user['phone']}</a></td>
								<td>{$user['address']}</td>
							</tr>";
						}
					}else{
						eror('No users');
					}
				?>
			</tbody>
		</table>
	</div>
	<script>
		$(document).ready( function () {
		    $('#myTable').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ]
		    } );
		} );
	</script>
</body>
</html>