<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$db = new SQLite3('pdb.db');

if(isset($_POST['word'])) {
    $word = $_POST['word'];
} else {
    $word = '';
}

$query = "SELECT * FROM product WHERE "; //name LIKE '?" . $word . "?'";
echo $query;
$data = $db->query($query);
$titles = array('No','Product Name','Unit Price');

CreateTableHeader(3, $titles);
while($value = $data->fetchArray()) {   
    BeginTableRoiw();
    OutputTableData($value['id']);
    OutputTableData($value['name']);
    OutputTableData($value['price']);
    EndTableRow();
}
$db->close();
EndTable();
?>
<form action="<?php echo ComConstants::getThisPHPFilePath()?>"
      method ="post">
    <input type="text" name="word"/>
    <input type="submit" value="word"/>
</form>
<?php
CreateFooter();