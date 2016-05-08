<?php
require_once '../common/CreateTable.php';
CreateHeader('sample');
$doc = new DomDocument('1.0');
$doc->load('Sample.rss');

$list = $doc->getElementsByTagName('item');

for($i=0; $i < $list->length; $i++) {
    $node = $list->item($i);
    $text = $node->nodeValue;
    echo $text . '<br/>';
}

CreateFooter();