<?php
require_once '../common/CreateTable.php';

CreateHeader('sample');

?>
<form action="<?php echo ComConstants::getThisPHPFilePath(); ?>"
      method ="post">
    File name<input type="text" name="title"/><br/>
    <textarea rows="10" cols="50" name="content"></textarea><br/>

<?php
if(isset($_POST['title']) && file_exists($_POST['title'])) {
    $fp = fopen($_POST['title'], 'w');
     fputs($fp, $_POST['content']);
    fclose($fp);
}
?>

    <input type="submit" value="CreateFile"/>
</form>
<?php
CreateFooter();