<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'sqldb');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg=$_POST['msg'];

    $reg = "insert into info values('$name', '$user', '$pass','$conn')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
    header('location:Log-in page/index.html');
?>