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

<form action="updatestudent.php" method="post">

<table style=" margin-top:10px" align="center" border="1">
  <tr>
    <th>Enter standerd</th>
    <td><input type="text" name="std" placeholder="enter your standerd" requried></td>
    <th>Enter student name</th>
    <td><input type="text" name="name" placeholder="enter student name"  requried></td>
	<th><input type="submit" name="btn" value="search"></th>
  </tr>
</table>
</form>
<h1 style="color:#FFFF00">
<table width="80%" style="color:black"align="center" border="1">
  <tr style=" font-size:18px; background:#000000; color:white">
    <th>Number</th>
    <th>Image</th>
    <th>Name</th>
    <th>Roll no</th>
    <th>Edit</th>
  </tr>


<?php
if(isset($_POST['btn']))
{
include('../dbcon.php');

$std=$_POST['std'];
$num=$_POST['name'];
$qry="SELECT * FROM `student` WHERE `standerd`='$std' AND `name` LIKE '%$num%'";
$run=mysqli_query($con,$qry);

$row= mysqli_num_rows($run);
if(!($row>0))
{
echo "<script>alert('no recoad found')</script>";
}else{
$count=0;
while($data = mysqli_fetch_array($run)){
$count++;
?>
  <tr align="center">
    <td><?php echo $count; ?></td>
    <td><img style="height:50px; width:50px" src="../dataimages/<?php echo $data['image']; ?>" /></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['rollno']; ?></td>
    <td><a href="updateform.php?sid=<?php echo $data['id']; ?>&mai=<?php echo $data['name']; ?>">Edit</a>&nbsp;&nbsp;<a href="deletestudent.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>

<?php	
}?>
</table>
<?php
}
}
?>

