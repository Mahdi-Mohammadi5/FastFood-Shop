<?php
include("header.html");
?>

<form action="loginaction.php" method="post" >
<div class="imgcontainer">
    <img src="profile-circle.svg" alt="Avatar" class="avatar">
  </div>
    <input type="text" name="username" placeholder="نام کاربری">
    <input type="text" name="password" placeholder="رمز عبور">
    <input type="text" name="repassword" placeholder="تکرار رمز عبور">
    <input type="submit" value="ورود">
</form>

<?php
include("footer.html");
?>   