<?php
include '../functions.php';
$conn = new theater();
$sql="SELECT * FROM movielist";
$templink = $conn->link;
$result = $templink->query($sql);


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

    <title>Admin Panel | Delete</title>
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
   
   <center>
    <div class="wrapper">
    <?php
       if($result) :
         while($row = $result->fetch_assoc()): ?>
             <tr>
               <td>
                  <b>Title: </b><?php echo $row['title']; ?>
               </td>
               <td>
                  <form method="POST">
                  <Button formtarget="_parent" type="submit" name="submit" value="Delete" onClick="return confirm('Sure You Want to Delete?');" 
                  class="btn btn-info" formaction="delete-single.php?id=<?php echo $row['id']; ?>">Delete</button>
                  </form>
               
               </br>
               </td>
             </tr>
       <?php endwhile;
             endif;
       ?>
    </div>
   </center>
</body>
</html>