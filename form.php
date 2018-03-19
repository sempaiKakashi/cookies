<?php


if (isset($_POST['menu'])){
	setcookie("menu", $_POST['menu'],time() + 86400);
	echo '<p>chotka</p>';
	header('location: form.php');
}
else{
    echo '<p>ne chotka</p>';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body style="background-color:<?php echo $_COOKIE['menu']; ?>">
<h1>Colors</h1>
<form action="form.php" name="colors" method="post">
    <p><select name="menu" size="1">
    	<option value="green">Зеленый</option>
    	<option value="yellow">Желтый</option>
    	<option value="red">Красный</option>
    	<option value="blue">Синий</option>
    </select></p>
    <p><input type="submit" value="Принять" name="submit"></p>
</form>
</body>
</html>