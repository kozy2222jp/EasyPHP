<?php
require_once '../common/CreateTable.php';
?>
<form action="<?php  echo ComConstants::getThisPHPFilePath(); ?>"
      method="post">
    ファイル名<input type="text" name="title"/><br/>
    <textarea rows="10" cols="50" name="content">
<?php        
if(isset($_POST['title']) && file_exists($_POST['title'])) {
    $fp = fopen($_POST['title'], 'r');
    while(!feof($fp)) {
        echo fgets($fp);
    }
    fclose($fp);
}
?>
    </textarea><br/>
    <input type="submit" value="Load"/>
</form>
<?php
CreateFooter();
?>