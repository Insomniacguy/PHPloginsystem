

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="follow">
	<title>Badass dev</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.19/css/uikit.min.css" />
</head>
<body>

<div class="uk-section uk-container">
   <?php 
   	echo "Hello world today is ";
   	echo date("Y m d");
   ?>
   <p><a href="/PHPloginsystem-master/login.php">Login </a>
   <a href="/PHPloginsystem-master/register.php">Register</a>
   </p>
   </div>

<?php require_once "inc/footer.php" ; ?>

</body>
</html>