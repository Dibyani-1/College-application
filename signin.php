
<html>
<body>
	<div align="center">
<table cellspacing="3" cellpadding="2">
  <tr>
    <td><img src="HomePage.png" width="270" height="110"></td>
  </tr>
</table>
	</div>
	<div align="center">
		<hr/>
		<p>&nbsp;</p>
	<form action="#" method="post">
	<table cellpadding="10" cellspacing="0"  style=" border-style: groove">
		<tr >
			<td style=" font-family:Geneva, Arial, Helvetica, sans-serif; width:inherit;">Email Id</td>
		</tr>
		<tr>
			<td ><input type="text" name="email" size="30" style="height:30px;"></td>
		</tr>		
		<tr>
			<td style=" font-family:Geneva, Arial, Helvetica, sans-serif; width:inherit;">Password</td>
		</tr>
		<tr>
			<td ><input type="password" name="password" size="30"  style="height:30px" ></td>
		</tr>
		<tr>
		<td><input type="submit" name="submit"value="login" align="absmiddle"  style="width:100px; height:30px">
			<input type="reset" value="Cancel" align="absmiddle"  style="width:100px; height:30px">
			</td>
		</tr>
		<tr>
			<td>
				<a href="signup.php" style="font-family:Geneva, Arial, Helvetica, sans-serif; text-decoration:blink;">New User Register </a>
			</td>
		</tr>
	<?php
		session_start();
		include_once("dbcon.php");
		if(isset($_POST['submit']))
			{
			$email=$_POST['email'];
			$password=$_POST['password'];
			$sql="select password,name from user where email='$email'";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
			if($password==$row['password'])
				{
				header("location:index.php");	
				}
			else	
				{?>
				<tr><td style="text-align:center;background-color:#999; color:blue; font-size:20px;">Wrong email/password Try Again </td></tr>
				<?php				
				}
			}
	?>
	</table>
	</form>
		<a href="index.php"> Back</a>
	</div>
</body>
</html>
