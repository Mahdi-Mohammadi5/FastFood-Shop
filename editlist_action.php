<?php
include("header.html");

$id=$_POST["id"];
$name=$_POST["name"];
$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"UPDATE `mahsolat` SET `name`='$name' WHERE `id`=$id");
mysqli_close($link);
?>
 <div class="row">
    <div class="col">
        <?php
        if($result===true)
        {
            ?>
            <script>
                location.replace("list.php");
            </script>
            <?php
        }else
        {
            echo("عملیات با مشکل مواجه شد ❌");
        }
        ?>
    </div>
</div>

<?php
include("footer.html");
?>