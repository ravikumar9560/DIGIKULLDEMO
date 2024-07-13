<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","test");
if($conn)
{echo"connect";}
?>

<html>
<head>
<title>School Form</title>
</head>
<body>
<form action="form23.php" method="post">
<table align="center" height="200px" bgcolor="#FFFF99">
<tr>
<td>NAME</td>
<td><input type="text"name="fullname"size="100"maxlength="100"placeholder="Full Name"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text"name="email"size="100"maxlength="100"placeholder="Email"></td>
</tr>
<tr>
<td>Contact</td>
<td><input type="text"name="Contact"size="100"maxlength="100"placeholder="Contact"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text"name="password"size="100"maxlength="100"placeholder="Password"></td>
</tr>
<tr>
<td>Submit</td>
<td><input type="submit"name="submit"value="submit"></td>
</tr>
</table>
<?php
	if(isset($_POST['submit']))

	{
	


		echo $first=$_POST['fullname'];
		
		echo $email=$_POST['email'];
		echo $contact=$_POST['contact'];
		
		echo $password=$_POST['password'];

		$query="insert into form23(fullname,email,contact,password)
		values('$fullname','$email','$contact','$password')";
		$result=mysqli_query($conn,$query);
		if($result)
		{
			echo"data insert succcess";
		}
	else{
			{echo "not success form22";}
	}
	}
		?>
</form>
</body>
</html>