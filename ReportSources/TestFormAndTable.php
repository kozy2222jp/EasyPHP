<?php
require_once('../common/CommonHTML.php');
CreateHeader();
OutputHightlight(1, 'Choose products you wat');

$products = array('pen', 'eraser', 'compass', 'ruler', 'ballpointpen');
$size = count($products);
?>
<form action="<?php echo ComConstants::getThisPHPFilePath() ?>"
      method="post">
    <select size ="<?php echo $size; ?>" name="products[]" multiple>
    <?php
        foreach($products as $name) {
            echo "<option value=\"{$name}\" />{$name}";
        }
    ?>
    </select>
    <input type="submit" value="submit" />
</form>
<?php
if(isset($_POST['products'])) {
    var_dump($_POST['products']);
    $title = array('No', 'ProductName');
    echo '<hr>';
    OutputHightlight(1, 'Order List');
    CreateTableHeader(2, $title);
    $cnt = 0;
    foreach($_POST['products'] as $name) {
        $cnt++;
        BeginTableRow();
        OutputTableData($cnt);
        OutputTableData($name);
        EndTableRow();
    }
    EndTable();
    
} else {
    OutputHightlight(2, 'No product chosen...');
}
CreateFooter();
