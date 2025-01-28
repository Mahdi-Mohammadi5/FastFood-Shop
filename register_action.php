<?php
include("header.html");
?>
<center>
<?php
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];

$c=mysqli_connect("localhost","root","","fastfood shop");
mysqli_query($c,"INSERT INTO `peopele` (`name`, `lastname`, `email`, `username`, `password`, `repassword`) 
VALUES ('$name', '$lastname', '$email', '$username', '$password', '$repassword');");
mysqli_close($c);

echo("ثبت نام شما با موفقیت انجام شد ✅");
?>
</center>
<?php
include("footer.html");
?>