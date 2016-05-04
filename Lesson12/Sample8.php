<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$fp = fopen('Sample2.php', 'r');
while(!feof($fp)) {
    $num = strlen(fgets($fp));
    for($i = 0; $i < $num; $i++) {
        echo '<img src="g.png"/>';
    }
    echo strval($num) . "<br/>";
}

fclose($fp);
CreateFooter();