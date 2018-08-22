<?php
	session_start();
    if(isset($_SESSION['uid']))
	{
		header('location:admin/admindash.php');
	}

?>
<?php
$num=range(1000,9999);
$char=range('A','Z');
$str=range('A','Z');
$sym=range('@','*');
$rnum = array_rand($num);
$rchar = array_rand($char);
$rstr = array_rand($str);
$rsym = array_rand($sym);

$cap = $char[$rchar].$num[$rnum].$sym[$rsym].$str[$rstr];

?>
<!DOCTYPE HTML>
<html>
<head>
<title>login form</title>
</head>

<body>
<h3><a style="float:left" href="index.php">Back to Home</a></h3><h3><a style="float:right"href="admin/adminregister.php">Admin Register</a></h3>

<h2 style="margin-top:40px" align="center">Admin login</h2>
<form action="login.php" method="post">

<table width="500" border="1" align="center">
  <tr>
    <th>Username</th>
    <td><input type="text" name="uname" requried><span style="color:red">*</span></td>
  </tr>
  <tr>
    <th>Password</th>
    <td><input type="password" name="pass"><span style="color:red">*</span></td>
  </tr>
  <tr>
    <th>please enter captach code shown below</th>
    <td><input type="text" name="captcha1"><span style="color:red">*</span></td>
  </tr>
  <tr>
    <th>captach code</th>
    <td><input type="hidden" name="captcha2" value="<?php echo $cap; ?>"><?php echo $cap; ?>&nbsp;&nbsp;<input type="submit" name="reload" value="Refresh"></td>
  </tr>
  <tr>
    <th colspan="2" align="center"><input type="submit" name="login" value="Login">   <input type="reset" name="reset">   <a href="forgotpassword.php">Forgot password</a></th>
  </tr>
</table>



</form>

</body>
</html>
<?php

include('dbcon.php');
if(isset($_POST['login']))
{

$username=$_POST['uname'];
$password=$_POST['pass'];
echo $enc = md5($password); 

$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$enc'";


$run=mysqli_query($con,$qry);

$row=mysqli_num_rows($run);

$txt = $_POST['captcha1']; 
$txt1=$_POST['captcha2'];




if(!($row>0 && $txt==$txt1) )
{
	echo "<script>alert('username and password not match')</script>";
}else
{
	$data=mysqli_fetch_array($run);
	$id=$data['id'];
	$img=$data['image'];
    $name=$data['fullname'];

	
	
	
	$_SESSION['uid']=$id;
	$_SESSION['ram']=$name;
	$_SESSION['photo']=$img;

	
	header('location:admin/admindash.php');
	
}


}



?>