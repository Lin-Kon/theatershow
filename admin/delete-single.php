<?php

include '../functions.php' ;
$did = $_GET['id'];

$conn = new theater();
$sql = "DELETE FROM movielist WHERE id='$did'";
$templink = $conn->link;
$result = $templink->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="wrapeer">
    
    
    </div>
</body>
</html>