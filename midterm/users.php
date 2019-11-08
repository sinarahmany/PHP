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

<link rel="stylesheet" href="css/style.css" type="text/css">
	<style>
		.container{
			width: 80%;
			margin: 100px auto;
		}

	</style>
</head>
<body>
		<header >
		<nav>
            <ul>
                <li><a href="<?php

					
					$getMenu = $conn->prepare("SELECT url FROM menus WHERE id=1 ");
					$getMenu->execute();
					
					$menus = $getMenu->fetchAll();
					 echo $menus[0]['url'];
						?>">Home</a></li>

						<li><a href="<?php
						$getMenu2 = $conn->prepare("SELECT url FROM menus WHERE id=2 ");
						$getMenu2->execute();
					$menus2 = $getMenu2->fetchAll();
					 echo $menus2[0]['url'];
						?>">Users</a></li>
						<li><a href="<?php
						$getMenu3 = $conn->prepare("SELECT url FROM menus WHERE id=4 ");
						$getMenu3->execute();
					$menus3 = $getMenu3->fetchAll();
					 echo $menus3[0]['url'];
						?>">Articles</a></li>

						<li><a href="<?php
						$getMenu4 = $conn->prepare("SELECT url FROM menus WHERE id=3 ");
						$getMenu4->execute();
					$menus4 = $getMenu4->fetchAll();
					 echo $menus4[0]['url'];
						?>">About</a></li>
                
            </ul>
        </nav>
        
        

	</header>
	<div class="container">
		<table id="myTable">
			<thead>
				<th>iD</th>
				<th>Name</th>
				<th>Email</th>
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
							</tr>";
						}
					}else{
						//eror('No users');
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