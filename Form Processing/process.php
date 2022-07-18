<?php
if(isset($_POST['submit']))
{
	if((!isset($_POST['fname'])) || (!isset($_POST['lname'])) ||
		(!isset($_POST['address'])) || (!isset($_POST['email']))
		|| (!isset($_POST['pass'])) || (!isset($_POST['gender'])))

	{

		$error="*"."Please fill all required fields";

	}

	else
	{
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$gender=$_POST['gender'];
	}
}



	if(isset($_POST['submit']))
	{
		if(!isset($error))
		{
			echo "<h1>You have submitted the following information</h1><br>";
			echo "<table border='1'>";
			echo "<thead>";
			echo "<th>Fields</th>";
			echo "<th>Values</th>";
			echo "</thead>";
			echo "<tr>";
			echo "<td>First name</td>";
			echo "<td>".$firstname."</td>";
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
			echo "<td>Gender</td>";
			echo "<td>".$gender."</td>";
			echo "</tr>";
			echo "</table>"; 
		}
	}
	?>


