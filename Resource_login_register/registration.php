<?php
session_start();
header("location:login.php");
/* connect to database check user*/
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'loginreg');

/* create variables to store data */
$name =$_POST['user'];
$pass =$_POST['password'];
$id   =$_POST['student_id'];
$birth=$_POST['date_of_birth'];
$country=$_POST['country'];

/* select data from DB */
$s="select * from userreg where name='$name'";

/* result variable to store data */
$result = mysqli_query($con,$s);

/* check for duplicate names and count records */
$num =mysqli_num_rows($result);
if($num==1){
    echo "Username Exists";
}else{
    $reg ="insert into userreg (name,password,student_id,date_of_birth,country) values ('$name','$pass','$id','$birth', '$country')";
    // $reg ="insert into userreg (name,password,student_id,date_of_birth,country) values ('$name','$pass','$id','$birth','$country')";
    mysqli_query($con,$reg);
    echo "registration successful";
}
