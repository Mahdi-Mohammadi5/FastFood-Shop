<?php
include("header.html");
?>

 <div class="row">
    <div class="col">
        <form action="newlist_action.php" 
            method="post">
            <input type="text" name="name">
            <input type="submit" value="ثبت">
        </form>    
    </div>
</div>

<?php
include("footer.html");
?>