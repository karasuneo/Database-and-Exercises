<form name="form1" method="post" action="4-3.php" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    画像 :
    <input type="file" name="upfile">
    <br>
    <input type="submit" value="ファイルアップロード">
</form>

<?php
print $_FILES["upfile"]["name"];
?>