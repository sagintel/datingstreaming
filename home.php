<?php
$request = $bdd->prepare("SELECT * FROM users WHERE id = ?");
$request = execute(array($_SESSION["id"]));
?><!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
</head>
<style>
	body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url("how-to-fall-in-love-1569341736.jpg");;
}
.box{
  float: left;
  width: 500px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background-image: url("how-to-fall-in-love-1569341736.jpg");
  text-align: center;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
</style>
<body><header>
	<h2>
  There's <?php echo $user_nbr; ?> user<?php if($user_nbr != 1) { echo "s"; } ?> online<br />
  	</h2>
  </header>
</body>
</html>