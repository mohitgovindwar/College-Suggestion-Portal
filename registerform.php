<?php

$h=mysqli_connect("Localhost","root","","portal") or die("Unable to connect");
$name= $_POST["name"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$gender=$_POST["r"];
$city=$_POST["city"];
$DOB=$_POST["dob"];
$pass=$_POST["password"];

$q=mysqli_query($h,"select * from student where password='$pass'");
$q1=mysqli_query($h,"select * from student where stud_email='$email'");
$q2=mysqli_query($h,"select * from student where mobile='$mobile'");

if(mysqli_num_rows($q)>0)
{
    echo "<script>alert('Password already exist');</script>";
}
elseif(mysqli_num_rows($q1)>0)
{
    echo "<script>alert('Email already exist');</script>";
}
elseif(mysqli_num_rows($q2)>0)
{
    echo "<script>alert('Mobile no. already exist');</script>";
}
else
{
    $que="insert into student values('$name','$email','$gender','$city','$DOB','$pass','$mobile')";
    $query=mysqli_query($h,$que);

    mysqli_close($h);
    header("location:Mainpage.php");
}


?>