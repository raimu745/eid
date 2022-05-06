<?php

$conn = mysqli_connect("localhost","root","","eid") or die("conn error");
if(isset($_POST['submit'])){
	echo $name = $_POST['name'];
	echo $email = $_POST['email'];

   
	$sql = "INSERT INTO eid (name,email) VALUES ('$name','$email') ";

     $result = mysqli_query($conn,$sql);

     if($result) {
     	echo "<h1>data inserted</h1>";
     }else{
     	echo "<h1>error</h1>";
     }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form action="" method="post">
		<input type="text" name="name" placeholder="your name">
		<input type="text" name="email" placeholder="your email">
		<input type="submit" value="submit" name="submit">
	</form>
</body>
</html>