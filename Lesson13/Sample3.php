<?php
require_once '../common/CreateTable.php';

CreateHeader('sample');
$parser = xml_parser_create('UTF-8');

xml_set_element_handler($parser, "startElement", "endElement");
xml_set_character_data_handler($parser, "characterData");

$fp = fopen('Sample1.xml', 'r');
while($data = fgets($fp, 10000)) {
    xml_parse($parser, $data, feof($fp));
}
xml_parser_free($parser);
fclose($fp);

CreateFooter();

function startElement($prs, $name, $attribute) {
    echo "{$name}<br/>";
}

function endElement($prs, $name) {
    echo "{$name}<br/>";
}

function characterData($prs, $name){
    echo "{$name}<br/>";
}