<?php
include("header.php");
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"DELETE FROM `mahsolat` WHERE `id`=$id;");
mysqli_close($link);

?>
<div class="row">
    <div class="col">
    <script>
        location.replace("list.php");
    </script>
    </div>
</div>

<?php
include("footer.html");
?>