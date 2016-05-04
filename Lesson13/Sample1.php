<?php
$doc = new DOMDocument('1.0','UTF-8');

$doc->formatOutput = true;

$root = $doc->createElement('cars');
$doc->appendChild($root);

$elm1 = $doc->createElement('car');
$root->appendChild($elm1);

$text1 = $doc->createTextNode('Sport Car');
$elm1->appendChild($text1);

$elm2 = $doc->createElement('car');
$root->appendChild($elm2);

$text2 = $doc->createTextNode('Truck');
$elm2->appendChild($text2);

echo 'wrote' . $doc->save('Sample.xml') . 'bytes.';