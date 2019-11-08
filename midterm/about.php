<?php
	include "connect.php";
	$getMenu = $conn->prepare("SELECT url FROM menus WHERE id=1 ");
	$getMenu->execute();
?>
<?php if ($_POST){
	
	//echo "return ". $_POST["name"] . $_POST["surname"] . $_POST["email"]."; ";
	echo " thank you for submitting your ...!";
	//var_dump($_POST);
}
else{

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
		input{
			border: 1px solid black;
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
        
        

	</header>
	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=north%20vancouver&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/fiverr-promo-code/">fiverr promo code</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>

	<form action="#" method="post">
		<input type="text" name="name" placeholder="your name" >
		<br />
		<input type="text" name="surname" placeholder="your surname">
		<br />
		<input type="text" name="email" placeholder="your Email">
		<input type="submit" >
	</form>
</body>
</html>
<?php
 } ?>

