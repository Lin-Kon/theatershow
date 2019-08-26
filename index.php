<?php
include 'functions.php';
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
    <title>Movie Theater</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
					<a class="navbar-brand" href="index.php">Movie Theater</a>
				</div>  
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>	
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<br><br><br>



	<div class="wrapper">
	

    <?php
       if($result) :
         while($row = $result->fetch_assoc()): ?>
			<tr>
			 	<td>
				 	<b>Title : </b><?php echo $row['title']; ?></br>
				</td>
				<td> 
				   <img src="images/<?php echo $row['imgsrc']; ?>" height="200" width="200" class="img-thumnail" />
	   			</td>
				<td>
				   <h4><b>Description</b></h4><?php echo $row['description']; ?>
				   <h4>Time</h4><?php echo $row['time'];?>
				   </br><hr>
	   			</td>
			 	
			   </tr>
       <?php endwhile;
             endif;
       ?>
       
	</div>



	<footer>
        <center>
        <h4>&copy;2019 . Movie Show</h4>
        </center>
</body>
</html>