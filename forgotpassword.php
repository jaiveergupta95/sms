<?php

include('dbcon.php');
if(isset($_POST['btn']))
{

$username=$_POST['uname'];
$password=md5($_POST['pass']);
$cpassword=md5($_POST['cpass']);



$qry="UPDATE `admin` SET `password`='$password' WHERE `username`='$username'";


if(empty($username)||empty($password)||empty($cpassword))
{
	echo "<script>alert('fill required field')</script>";

}else{
    if($password==$cpassword){
	$run=mysqli_query($con,$qry);


     ?><script>
	 alert('your password is reset done');
	 window.open('login.php','_self');
	    </script>
	<?php
	 }else
	 {
	 echo "<script>alert('your password does not match')</script>";
	 }
}
}





?>
<form action="forgotpassword.php" method="post">

<table width="500" border="1">
  <tr>
  	<th colspan="2"> Forgot Password</th>
  </tr>
  <tr>
      <th>Username</th>
    <td><input type="text" name="uname" value="<?php $username;?>"><span style="color:red">*</span></td>
  </tr>
  <tr>
    <th>Password</th>
    <td><input type="password" name="pass" value="<?php $password;?>"><span style="color:red">*</span></td>
  </tr>
    <tr>
    <th>Re-enter Password</th>
    <td><input type="password" name="cpass" value="<?php $cpassword;?>"><span style="color:red">*</span></td>
  </tr>

  <tr>
  <tr>
  <tr>
    <th colspan="2" align="center"><input type="submit" name="btn" value="Submit">   <input type="reset" name="reset"></th>
  </tr>
</table>
</form>