<?php
$id=$_GET["id"];

$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"SELECT * FROM `mahsolat` WHERE `id`=$id;");
mysqli_close($link);
$row=mysqli_fetch_array($result);

include("header.html");
?>
 <div class="row">
    <div class="col">
        <form action="editlist_action.php" method="post">
            <input type="text" name="id" hidden value="<?php echo($row["id"]); ?>">
            <input type="text" name="name" value="<?php echo($row["name"]); ?>">
            <input type="submit" value="ویرایش">
        </form>    
    </div>
</div>

<?php
include("footer.html");
?>