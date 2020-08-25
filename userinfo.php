<?php
$username=$_POST["Username"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];
$activities=$_POST["Activities"];
$destination=$_POST["Destination"];
$traveldate=$_POST["Traveldate"];
$comments=$_POST["Comments"];
$conn=mysqli_connect("localhost","root","","online");
if($conn)
{
	$sql="INSERT into users(username,email,phone,activities,destination,traveldate,comments)values('$username','$email','$phone','$activities','$destination','$traveldate','$comments')";
	if(mysqli_query($conn,$sql))
	{
echo "the details inserted successfuly";
		header("location:index.php");
	}
}
?>

