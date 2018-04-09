<!DOCTYPE html>
<?php include "db.php";

   session_start();



 ?>

<html>
       <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Grocery at doorsteps</title>
		 <link rel="icon" type="image/png" href="img/cropped-favicon.png">
         <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	     <link href="rgcss/shopkeeper.css" rel="stylesheet">
	     <link rel="stylesheet" href="rgcss/bootstrap1.css" >
         <script src="rgjs/jq.js" ></script>
         <script src="rgjs/bs.js" ></script>
		 <script src="shopdet/sshopjs.js" ></script>
	   </head>
  <body>	
	
    <div class="container-fluid">	 
	     <div class="header">
             <a class="logo mx-auto" href="index.php">Grocery<span>&nbsp;at&nbsp;doorstep</span></a>
			  
		 </div>
	   <nav class="nav-tabs">
		 <div class="container-fluid">
		   <ul class="nav nav-tabs">
              <li><a class="nav-tabs-brand  nav-tab-header" href="shop.php"><span class="glyphicon glyphicon-home"></span>
			  &nbsp;&nbsp; 
			  <?php
			       $shp = $_SESSION['uid'];
                   $sql1="SELECT * FROM shopkeeper where shp_id=$shp";
                   	 $sql2="SELECT * FROM item_detail";			   
                    $run1= mysqli_query($con,$sql1);
					$run2=mysqli_query($con,$sql2);
					while ($row = mysqli_fetch_assoc($run1)) {
                        echo $_SESSION['Shopname'];
                                 };
								  
				?></a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Or Item<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    
				      <li><a href="viewitem.php">View Item</a></li>
					  <li><a href="serchitem.php">Update Item</a></li>
				     
				   </ul></li>
				   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchase<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				    				     <li><a href="addnew.php">Add New</a></li>
				  <li><a href="ledger.php">Ledger</a></li>
				   </ul></li>
		
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Sales<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				     <li><a href="#billgen"data-toggle="tab">Bill Generation</a></li>
				     <li><a href="#Pervbill"data-toggle="tab">Previous Billing</a></li>
				      <li><a href="#cancbil"data-toggle="tab">Cancelled Bill</a></li>
				   </ul></li>
			
              <li class="nav-tab navbar-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['GSTIN'];?>&nbsp;&nbsp;<span class="glyphicon glyphicon-option-vertical"></span>
			       <ul class="dropdown-menu">
			         <li><a href="profile.php" > <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Profile</a></li>
				     <li><a href="logout.php" name='logout'> <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a></li>
			       </ul>
			</ul>
		 </div>
       </nav>
	   
	   <div class="container-fluid">
	   <div class="tab-content">
	    
		  <div id="ledg" class="tab-pane fade">
		  <h2>Ledger</h2>
		  <p>It is about the ledger</p>
		 </div>
		 <div id="billgen" class="tab-pane fade">
		  <h2>Bill Generation</h2>
		  <p>It is about the Bill Generation</p>
		 </div>
		 <div id="Pervbill" class="tab-pane fade">
		  <h2>Previous Billing</h2>
		  <p>It is about the Previous Billing</p>
		 </div>
		 <div id="cancbil" class="tab-pane fade">
		  <h2>Cancelled Bill</h2>
		  <p>It is about the Cancelled Bill</p>
		 </div>
		 <div id="paymnt" class="tab-pane fade">
		  <h2>Payment List</h2>
		  <p>It is about the Payment List</p>
		 </div>
		 
		 </div>
	  </div>
	  
	</div>	  
  </body>
</html>