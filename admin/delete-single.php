<?php

include '../functions.php' ;

if(isset($_POST['submit'])){
   
    $did = $_GET['id'];
    $tempdid = $did;
    $conn = new theater();

    $sql = "DELETE FROM movielist WHERE id='$did'";
    $templink = $conn->link;
    $result = $templink->query($sql);
    if ($result) {
        // unlink( "../images/".$tempid.".jpg" );
        echo "<center></br></br></br><h2>Movie id ".$tempdid." Successfully Deleted</h2></center>";
   
    }
    else{
        die('Invalid query: ' . mysql_error());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/delete_style.css" media="all" />

    <title>Admin Panel | Delete Confirmation</title>
</head>
<body>
<div class="nav">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    	<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="dashboard.php">Admin Dashboard</a>
				</div>  
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="insert.php" target="_parent">Add New Movie</a></li>
						<li class="active"><a href="delete.php" target="_parent">Delete Existing Movie</a></li>	
                  <li><a href="index.php" target="_self">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
   </br></br></br>
   
    <div class="wrapeer">
    
    </div>  
</body>
</html>