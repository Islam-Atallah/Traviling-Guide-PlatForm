<?php
$conn = mysqli_connect("localhost","root","","travel");
$name = $_POST['name'];
$mobilenum =$_POST['mobilenum'];
$email= $_POST['email'];
$date=$_POST['date'];
$updatee= $_POST['updatee'];

$sql ="INSERT INTO `user`(`name`, `mobilenum`, `email`, `date`, `updatedate`) VALUES ('$name','$mobilenum','$email','$date','$updatee')";



    $insert = mysqli_query($conn,$sql);




?>