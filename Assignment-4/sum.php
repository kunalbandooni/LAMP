
<!DOCTYPE html>
<html>
<head>
	<title>Sum of two numbers</title>
</head>
<body>
	<form method="POST" action="sum.php">
		Number 1 <input type="number" name="num1">
		Number 2 <input type="number" name="num2">
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$var1 = $_POST['num1'];
	$var2 = $_POST['num2'];
	$sum= $var1 + $var2;
	echo "sum is : $sum";
}

else{
	echo "The data is not submitted yet!!";
}
	
?>
