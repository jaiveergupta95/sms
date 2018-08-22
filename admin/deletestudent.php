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

$idd=$_GET['sid'];
include('../dbcon.php');
$qry="DELETE FROM `student` WHERE `id`='$idd'";
$run=mysqli_query($con,$qry);
if($run==true)
{
		?><script>alert('Delete Done');
		window.open('updatestudent.php?sid=<?php echo $idd; ?>','_self');
		</script>
		<?php

}else
{
	echo "not done";
}

?>
