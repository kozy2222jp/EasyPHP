<?php

$doc = new DOMDocument();
$doc->load('Sample1.xml');

$list = $doc->getElementsByTagName('name');

for($i=0; $i < $list->length; $i++) {
    $node = $list->item($i);
    $text = $node->nodeValue;
    echo $text . '<br/>';
}