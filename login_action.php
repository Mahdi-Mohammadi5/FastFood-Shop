<?php
include("header.php");
?>
<center>
<?php
$email=$_POST['email'];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","fastfood shop");
$m=mysqli_query($c,"SELECT * FROM `peopele` WHERE `email`='$email' and `password`='$password'");
mysqli_close($c);

$r=mysqli_fetch_array($m);
if($r)
{
    $_SESSION["login"]=true;
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}else
{
    echo("نام کاربری یا کلمه عبور صحیح نیست");
}

?>
</center>
<?php
include("footer.html");
?>