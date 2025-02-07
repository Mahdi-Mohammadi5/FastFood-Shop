<?php
include("header.html");

$name=$_POST["name"];
$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"INSERT INTO `mahsolat`(`name`) VALUES ('$name');");
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