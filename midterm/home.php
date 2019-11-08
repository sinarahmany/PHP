<?php
	include "connect.php";
	$getMenu = $conn->prepare("SELECT url FROM menus WHERE id=1 ");
	$getMenu->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HomePage</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

	

	<style>
		.container{
			width: 80%;
			margin: 20px auto;
		}
		
	</style>
</head>
<body>
	<header >
		<nav>
            <ul>
                <li><a href="<?php
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
        <section class="imga"></section>
        

	</header>
</body>
</html>