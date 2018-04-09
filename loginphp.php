

<?php include "db.php"; ?>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
$epassword=md5($password);
$sql="SELECT * FROM customer WHERE email='$email' AND password='$epassword'";
$run= mysqli_query($con,$sql);
$sql1="SELECT * FROM shopkeeper WHERE email='$email' AND password='$epassword'";
$run1= mysqli_query($con,$sql1);
if(($row=mysqli_fetch_assoc($run)))
{
$cus_id=$row['cus_id'];	
?><script>
    window.alert('Login Success, Welcome Customer!');
    window.location='customer.php' ;</script>
	<?php

}
else if($row= mysqli_fetch_assoc($run1))
{
    $shp_id=$row['shp_id'];	
?><script>
					window.alert('Login Success, Welcome Shopkeeper!');
					 window.location='shopkeeper.php;'
				</script>
	<?php

}
else if($email=="gads@gmail.com" && $password=="gads@123")
{
	?>
		
		<script>
            window.alert('Login Success, Welcome Admin!');
            window.location='admin.php';</script>
		<?php
	
}
    else {
?>
   <script>alert('please check you email and password');</script>
		<script>window.location='login.php';</script>
		<?php
	}
	  
 ?>
