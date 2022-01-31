<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"registration");
$name=$_POST['uname'];
$password=$_POST['psw'];
// mysqli_report()
$s= "select * from administrator where name = '$name' && password = '$password' ";
try{
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num == 1){
        echo "LOGIN SUCCESSFULL ";
    }
    else{
        echo "WRONG PASSWORD";
    }
}catch(Exception $e ){echo " error     $e";}
