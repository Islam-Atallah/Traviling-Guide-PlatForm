<?php
$_SERVER = "localhost";
$username = "root";
$password ="";
$dbname = "travel";
$conn = mysqli_connect($_SERVER,$username,$password,$dbname);

$name = $_POST['name'];
$type= $_POST['type'];
$location =$_POST['location'];
$price =$_POST['price'];


$sql = "INSERT INTO `pakages`(`name`, `type`, `location`, `price`) VALUES('$name','$type','$location','$price')";



$insert = mysqli_query($conn,$sql);
if(!$insert)
{
    echo "error";

}



?>



