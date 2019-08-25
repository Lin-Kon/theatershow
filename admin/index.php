<?php

include '../functions.php' ;

if(isset($_POST['submit'])){
   
    $conn = new theater();
    $username = $_POST['username'];
    $pass = $_POST['password'];
     
     $sql="SELECT * FROM admin WHERE username='$username' AND password='$pass'";
     $check = $conn->login($sql);
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

    <title>Admin | Login</title>
    <style>
form.user .form-control-user {
  font-size: 1.2rem;
  border-radius: 10rem;
  padding: 1.5rem 1rem;
}

form.user .btn-user {
  font-size: 1.2rem;
  border-radius: 10rem;
  padding: 0.75rem 1rem;
}
  </style>
</head>
<body>
  <div class="bg-wrapper">  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4">
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-1">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="text" name="username" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="password" name="password" placeholder="Enter Password">
                                        </div>
                                        <button type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                    </form>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div> 
    </div> 
  </div>

</body>
</html>