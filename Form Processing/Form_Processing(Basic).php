<!DOCTYPE html>
<html>
<head>
	<title>Online Form Process</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

	Name: <input type="text" name="fname">
	<button type="submit">Send</button>
</form>

<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=htmlspecialchars($_POST['fname']);

	if(empty($name))
	{
		echo "You have to add a name";
	}

	else
	{
		echo $name;
	}
}
?>
</body>
</html>