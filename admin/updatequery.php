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
if(isset($_POST['btn']))
{
include('../dbcon.php');

$id=$_POST['hidden'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$std=$_POST['std'];
$imgname=$_FILES['img']['name'];
$imgtempname=$_FILES['img']['tmp_name'];
move_uploaded_file($imgtempname,"../dataimages/$imgname");


$qry= "UPDATE `student` SET `id` = '$id', `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcon', `standerd` = '$std', `image` = '$imgname' WHERE `id` = $id;";

$run=mysqli_query($con,$qry);

if($run==true)
{	?>
	<script>
	alert('Data update sucessfully');
	window.open('updateform.php?sid=<?php echo $id;?>','_self');
	</script>
	<?php
}else
{
	echo "<script>alert('Error!')</script>";

}



}
?>
