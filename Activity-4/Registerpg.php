<?php

session_start();
header('location:authentication.php');

$con= mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'webdata');

if(isset($_POST["submit"])){
    $passs=mysqli_real_escape_string($con,md5($_POST['password']));
    $conpasss=mysqli_real_escape_string($con,md5($_POST["conpassword"]));

    if($passs===$conpasss){
    }else{
        echo"<script>alert('Password not match , please try again');</script>";
    }

}

$name=$_POST['user'];
$pass=$_POST['password'];
$conpass=$_POST['conpassword'];

$s = "select * from username where u_name = '$name'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo"username already exists";
}else{
    $reg= " insert into username(u_name,password,conpassword) values ('$name' , '$pass' , '$conpass')";
    mysqli_query($con,$reg);
    echo" Hurray! You have registered successfully";
}