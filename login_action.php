<?php
include("header.html");
?>
<center>
<?php
$email=$_POST['email'];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","fastfood shop");
$m=mysqli_query($c,"SELECT * FROM `peopele` 
WHERE `email`='$email' and `password`='$password'");
mysqli_close($c);

$r=mysqli_fetch_array($m);
if($r){
    echo("شما با موفقیت وارد شدید");
}else{
    echo("ایمیل یا رمز عبور صحیح نیست");
}

?>
</center>
<?php
include("footer.html");
?>