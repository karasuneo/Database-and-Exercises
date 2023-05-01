<form method="POST" method="post" action="4-1.php" enctype="multipart/form-data">
    <input type="text" name="address">
    <input type="submit" value="送信">
</form>

<?php
    print $_POST["address"];
?>