<?php
include("header.php");
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
$result=mysqli_query($c,"INSERT INTO `peopele` (`name`, `lastname`, `email`, `username`, `password`, `repassword`) 
VALUES ('$name', '$lastname', '$email', '$username', '$password', '$repassword');");
mysqli_close($c);

if($result===true)
{
    ?>
    <script>
        location.replace("login.php");
    </script>
    <?php
}else
{
    echo("در عملیات ثبت نام مشکلی پیش آمده");
}
?>
</center>
<?php
include("footer.html");
?>