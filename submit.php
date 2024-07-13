






<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","test");
if($conn)
{echo"connect";}
else
{echo"not connect";}

?>





<html>
<head>
<title> FORM </title>
</head>
<body>
<table align="center" bgcolor="yellow"height="500px">
<form action="form22.php"method="post">
<tr> 
<td>FIRST NAME:</td>
<td><input type="text"name="first"size="100"maxlengt="100"placeholder="FIRST NAME:"></td>
</tr>

<tr>
<td>LAST NAME:</td>
<td><input type="text"name="last"size="100"maxlengt="100"placeholder="LAST NAME:"></td>
</tr>

<tr>
<td>EMAIL:</td>
<td><input type="text"name="email"size="100"maxlengt="100"placeholder="EMAIL:"></td>
</tr>

<tr>
<td>CONTACT:</td> 
<td><input type="text"name="contact"size="100"maxlengt="100"placeholder="CONTACT:"></td>
</tr>


<tr>
<td>Gender:</td>
<td>Male:<input type="radio"name="radio">Female:<input type="radio"name="radio"></td>
</tr>
<td>PASSWORD:</td>
<td>
<input type="text"name="password"size="100"maxlength="100"placeholder="Password"><br>
</td>
<tr>
<td>Submit:</td>
<td>
<input type="submit"name="submit"value="submit">
</td>
</tr>
</form>
<?php
	if(isset($_post['submit']))
	{
		echo$first=$_post['first'];
		echo$last=$_post['last'];
		echo$email=$_post['email'];
		echo$contact=$_post['contact'];
		echo$radio=$_post['radio'];
		echo$password=$_post['password'];

		$query="insert into form22(first,last,email,contact,radio,password)
		values('$first','$last','$email','$contact','$radio','$password')";
		$result=mysqli_query($conn,$query);
		if($form22){
			echo"data insert succcess";
		}
		}else{
		{echo "not success form22";}
	}
		?>
</table>
</body>
</html>
	

