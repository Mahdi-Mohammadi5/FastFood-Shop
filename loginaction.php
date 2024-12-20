<?php
include("header.html");
?>
<center>
<?php
if( isset($_POST["username"])  && !empty($_POST["username"])
 && isset($_POST["password"])  && !empty($_POST["password"])
 && isset($_POST["repassword"])  && !empty($_POST["repassword"])
){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    echo("<h1>"."username = ".$username."</h1>");
}else
{
echo("<h1>پر کردن تمام فیلدها الزامی می باشد</h1>");
}
?>
</center>
<?php
include("footer.html");
?>