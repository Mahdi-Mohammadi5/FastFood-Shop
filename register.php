<?php
include("header.html");
?>

<form action="registeraction.php" method="post" >
    <input type="text" name="firstname" placeholder="نام">
    <input type="text" name="lastname" placeholder=" نام خانوادگی">
    <input type="text" name="email" placeholder="ایمیل">
    <input type="text" name="username" placeholder="نام کاربری">
    <input type="text" name="password" placeholder="رمز عبور">
    <input type="text" name="repassword" placeholder="تکرار رمز عبور">
    <input type="submit" value="ثبت نام">
</form>

<?php
include("footer.html");
?>
            