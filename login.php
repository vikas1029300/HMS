<?php
// header('location:create.php');
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"registration");
$name=$_POST['email'];
$password1=$_POST['psw'];
$password2=$_POST['psw-repeat'];
if ($password1!=$password2){
    echo "passwords do not match";
}
else{
    $s= "select * from usertable where name = '$name'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if ($num == 1){
        echo "user name already taken ";
    }
    else{
        $reg="insert into usertable(name, password) values ('$name','$password1')";
        mysqli_query($con,$reg);
        echo "Registration successful";
    }
 }



?>