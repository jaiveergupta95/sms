<?php
session_start();

if($_SESSION['uid'])
{	
	include('adminifo.php');				
}
else{
	header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');

?>
<?php
include('../dbcon.php');

$idd=$_GET['sid'];
$qry= "SELECT * FROM `student` WHERE `id`='$idd'";
$run=mysqli_query($con,$qry);
$data=mysqli_fetch_array($run);

?>

<form action="updatequery.php" method="post" enctype="multipart/form-data">
<table width="70%" border="1" align="center" style="color:#FFFFFF; font-size:20px">
  <tr>
    <td>Roll no:</td>
    <td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>" requried></td>
  </tr>
  <tr>
    <td>Full name:</td>
    <td><input type="text" name="name" value="<?php echo $data['name'];?>" requried></td>
  </tr>
  <tr>
    <td>City:<d>
    <td><input type="text" name="city" value="<?php echo $data['city'];?>" requried></td>
  </tr>
  <tr>
    <td>Parants phone no:</td>
    <td><input type="text" name="pcon" value="<?php echo $data['pcont'];?>" requried></td>
  </tr>
  <tr>
    <td>Standerd:</td>
    <td><input type="number" name="std" value="<?php echo $data['standerd'];?>" requried></td>
  </tr>
  <tr>
    <td>Image:</td>
    <td><input type="file" name="img" value='<img src="../Images/<?php echo $data['image']; ?>">' ></td>
  </tr>
  <tr>
  	<td><input type="hidden" name="hidden" value="<?php echo $idd;?>"></td>
    <td align="left"><input type="submit" name="btn" value="submit"></td>
  </tr>
  <tr>
</table>

</form>
</body>
</html>





