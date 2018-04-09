<!DOCTYPE html>
<html>
<head>
	<title>Grocery at door step</title>
    <link rel="icon" type="image/png" href="img/cropped-favicon.png">
     <link rel="stylesheet" href="rgcss/bootstrap1.css" >
    <script src="rgjs/jq.js" ></script>
    <script src="rgjs/bs.js" ></script>
	
    </head>
<body>



<?php include "db.php"; ?>
<?php
$gstin=$_POST['gstin'];
$shopname=$_POST['shopname'];
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$password=$_POST['password'];
$epassword=md5($password);
$int_sql= "INSERT INTO shopkeeper(gstin,shopname,username,email,mobile,address,password) 
VALUES ('$gstin','$shopname','$username','$email','$mobile','$address','$epassword')";

if(mysqli_query($con,$int_sql))
{ 
?>
<script>
alert('signup success');</script>
		<script>window.location='login.php';
</script>
	<?php 
}
	else
{
    echo "fail to Signin";
}
?>
