<?php
// include('session.php');
include '../functions.php' ;

if(isset($_POST['submit'])){
    $conn = new theater();
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $time =$_POST['time'];
    $image = $_FILES['image']['name'];
    $target = "../images/".basename($image); 
    $sql = "INSERT INTO movielist(title,description,time,imgsrc) VALUES ('$title','$desc','$time','$image')";
    $templink = $conn->link;
    $result = $templink->query($sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '</br></br><center><h2 style="color: white;">'.$title.' image uploaded</h2></center>';
    }
    else{
        echo '</br></br><center><h2 style="color: white;">'.$title.' image already uploaded or unable to upload</h2></center>';

    }
    if($result){
        echo '</br></br><center><h2 style="color: white;">'.$title.' Successfully Inserted</h2></center>';
    }else{
        echo '</br></br><center><h2 style="color: white;">'.$title.' not Inserted</h2></center>';
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
    <link rel="stylesheet" type="text/css" href="../css/insert_style.css" media="all" />

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
						<li class="active"><a href="insert.php" target="_parent">Add New Movie</a></li>
						<li><a href="delete.php" target="_parent">Delete Existing Movie</a></li>	
                        <li><a href="index.php" target="_self">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
    
    <div class="wrapper">
        <form class="movies-form" method="post" enctype="multipart/form-data">
            <label class="must" for="Title">Enter Movie Title</label>
            <input type="text" name="title" required autofocus> 
            <label class="opt" for="Description">Enter Movie Description</label>
            <!--<textarea name="desc" rows="10" cols="60"></textarea>-->
            <input type="text" name="desc">
            <label class="opt" for="Show Time">Enter Show Time</label>
            <input type="time" name="time">
            <label class="must" for="Image">Add Movie Poster</label>
            <input type="file" name="image" id="image" required/>  
            </br>  
            <center>
            <Button type="submit" name="submit" value="Insert" class="btn btn-info" >Save</button> 
            </br></br>
            <label for="caution">Caution: You must fill the red labelled fields to save a new movie</label>
            </center>
        </form>  
        
    </div>

</body>
</html>