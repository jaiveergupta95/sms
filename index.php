<!DOCTYPE HTML>
<html>
<head>
<title>Student management system</title>
<link rel="icon" type="image" href="Images/jaiicon/android-icon-36x36.png" >

</head>

<body>
<h3 align="right" style="margin-right:50px"><a href="login.php"> Admin login </a></h3>
<h2 align="center">Welcome to student management system</h2>
<form action="index.php" method="post" >
<table width="500" border="1" align="center">
  <tr>
    <th colspan="2" align="center">Student information</th>
  </tr>
  <tr>
    <th align="left">Choose stander</th>
    <td><select name="std" >
		<option value="1">1st</option>
		<option value="2">2nd</option>
		<option value="3">3rd</option>
		<option value="4">4th</option>
		<option value="5">5th</option>
		<option value="6">6th</option>
		<option value="7">7th</option>
		<option value="8">8th</option>
		<option value="9">9th</option>
		<option value="10">10th</option>
		<option value="11">11th</option>
		<option value="12">12th</option>
	    </select>
	</td>
  </tr>
  <tr>
    <th align="left">Enter Roll No</th>
    <td><input type="number" name="rollno" placeholder="Enter your roll no" required> </td>
  </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" name="btn" value="show result"></td>
  </tr>

</table>

</form>

</body>
</html>

<?php
if(isset($_POST['btn']))
{
include('dbcon.php');
$std= $_POST['std'];
$rollno=$_POST['rollno'];
$qry="SELECT * FROM `student` WHERE `standerd`='$std' AND `rollno`='$rollno'";
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);
if(!($row>0))
{
	?><script>
	alert('data not found');
	</script>
	<?php
}else
{
$data=mysqli_fetch_array($run);
?>
<table width="70%" border="1" align="center" style="margin-top:15px; height:200px">
   <tr>
    <th colspan="3" align="center">Student Details</th>
  </tr>
	
  <tr>
    <td rowspan="5" align="center"><img src="dataimages/<?php echo $data['image'];?>" height="150px" width="150px"></td>
    <th>Name</th>
    <td><?php echo ucwords($data['name']);?></td>

  </tr>
  <tr>
    <th>Roll No</th>
    <td><?php echo $data['rollno'];?></td>
  </tr>
  <tr>
    <th>City</th>
    <td><?php echo $data['city'];?></td>
  </tr>
  <tr>
    <th>Standred</th>
    <td><?php echo $data['standerd'];?></td>
  </tr>
  <tr>
    <th>Parants contect no</th>
    <td><?php echo $data['pcont'];?></td>
  </tr>
</table>
<?php
	
}

}
?>
