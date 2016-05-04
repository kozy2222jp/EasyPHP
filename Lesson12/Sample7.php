<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
OutputHightlight(1, 'ソースコードの表示');
?>
<form action="<?php echo ComConstants::getThisPHPFilePath(); ?>"
      method="post">
    <input type="submit" name="program" value="LAUNCH"/>
</form>
<?php
if(isset($_POST['program'])) {
    exec('notepad.exe Sample2.php');
    system('notepad.exe Sample2.php');
}