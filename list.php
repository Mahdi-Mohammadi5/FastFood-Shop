<?php
include("header.html");

$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"SELECT * FROM `mahsolat`");
mysqli_close($link);
?>
<div class="row">
    <div class="col">
    <button><a href="newlist.php">+</a></button>
    <span>لیست محصولات</span>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row">
    <div class="col">
        <button><a href="editlist.php?id=<?php echo($row["id"]); ?>" id="n2">ویرایش</a></button>
        <button><a href="deletelist.php?id=<?php echo($row["id"]); ?>" id="n1">حذف</a></button>
        <span>
            <?php echo($row["name"]);  ?>
        </span>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>

<?php
include("footer.html");
?>