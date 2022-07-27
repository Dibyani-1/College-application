<html>
<body>
	<div align="center">
	<table cellspacing="3" cellpadding="2">
  <tr>
    <td><img src="HomePage.png" width="270" height="110"></td>
  </tr>
	</table>
	<hr/>
</div>
<div align="center">
<h1> New User Registration form</h1>
<form action="signup.php" method="post">
	<table cellpadding="6"  style=" font-family:Geneva, Arial, Helvetica, sans-serif; font-size:24px;">
		<tr>
			<td  style="text-align:center;">Name </td>
			<td><input type="text" name="name" required style="width:300px;height:30px;"></td>
		</tr>
		<tr>
			<td style="text-align:center;">Email </td>
			<td><input type="email" name="email" required  style="width:300px; height:30px;"></td>
		</tr>
		<tr>
			<td style="text-align:center;">Password </td>
			<td><input type="password" name="password" required  style="width:300px; height:30px;"></td>
		</tr>
		<tr>
			<td style="text-align:center;">Mobile No </td>
			<td><input type="number" name="mobileno"  required  style="width:300px; height:30px;"></td>
		</tr>
		<tr>
			<td style="text-align:center;"> Date of Birth </td>
			<td><input type="date" name="dob" required  style="width:300px; height:30px;"></td>
		</tr>
		<tr>
			<td style="text-align:center;"> Address </td>
			<td><input type="text" name="address"  required style="width:300px; height:30px;"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Submit" style="width:100px; height:30px;">
			<input type="reset" value="Cancel" align="absmiddle"  style="width:100px; height:30px"></td>
			
		</tr>
	</table>
	<a href="index.php"> Back</a>
	</form>
<div>
<?php
if(isset($_POST['submit']))
{
	include_once("dbcon.php");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobileno=$_POST['mobileno'];
	$dob=$_POST['dob'];
	$address=$_POST['address'];
	echo $password;
	$sql="insert into user (name,email,password,mob,dob, address) values ('$name','$email','$password','$mobileno','$dob','$address')";
	$status=mysqli_query($con,$sql);
	if($status)
	{
		header("location:index.php");
	}
	else
	{
		header("location:signup.php");
	}
}

?>
</body>
</html>