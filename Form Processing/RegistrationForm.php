<?php
error_reporting(~E_NOTICE);

if(isset($_POST['submit']))
{
	if((!isset($_POST['fname'])) || (!isset($_POST['lname'])) ||
		(!isset($_POST['address'])) || (!isset($_POST['email']))
		|| (!isset($_POST['pass'])) || (!isset($_POST['gender'])))

	{

		$error="*"."Please fill all required fields";

	}

	if($_POST['pass']!==$_POST['confirm_pass'])
	{
		$error="Password and Confirm Password Should Match";
	}
	else
	{
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$hashed=password_hash($password, PASSWORD_DEFAULT);
		$gender=$_POST['gender'];
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>

	<h1>Register Our Website</h1>
	<fieldset>
		<form method="POST" action="">
			<?Php 

			if (isset($_POST['submit']))
			{
				if(!empty($error))
				{
					echo "<p style=color:red;>".$error."</p>";
				}
			}
			?>

			First name:
			<input type="text" name="fname">
			<span style="color: red;">*</span>
			<br>
			Last name:
			<input type="text" name="lname">
			<span style="color:red;">*</span>
			<br>
			Addres:
			<input type="text" name="address">
			<span style="color: red;">*</span>
			<br>
			Email:
			<input type="email" name="email">
			<span style="color: red;">*</span>
			<br>
			Password:
			<input type="password" name="pass">
			<span style="color: red;">*</span>
			<br>
			Confirm Password:
			<input type="password" name="confirm_pass">
			<span style="color: red;">*</span>
			<br>
			Gender:
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<br>
			<br>
			<input type="submit" name="submit" value="submit">	


		</form>

	</fieldset>
<?php
	if(isset($_POST['submit']))
	{
		if(!isset($error))
		{
			echo "<h1>You have submitted the following information</h1><br>";
			echo "<table border='1'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Fields</th>";
			echo "<th>Values</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tr>";
			echo "<td>First name</td>";
			echo "<td>".$firstname."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Last Name</td>";
			echo "<td>".$lastname."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Address</td>";
			echo "<td>".$address."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Email Address</td>";
			echo "<td>".$email."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Password</td>";
			echo "<td>".$password."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Your Encrypted Password</td>";
			echo "<td>".$hashed."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Gender</td>";
			echo "<td>".$gender."</td>";
			echo "</tr>";
			echo "</table>"; 
		}
	}
	?>

</body>
</html>