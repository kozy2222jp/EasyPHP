<?php

$prs = xml_parser_create('UTF-8');

xml_set_element_handler($prs, 'startElement', 'endElement');
xml_set_character_data_handler($prs, 'characterData');

global $isItem; $isItem = false;
global $isPrint; $isPrint = false;
global $isItemTitle; $isItemTitle = false;
global $title; $title = '';

$fp = fopen('sample.rss', 'r');
while($data = fgets($fp, 10000)) {
    xml_parse($prs, $data, feof($fp));
}
xml_parser_free($prs);

function startElement($prs, $name, $attribute) {
    global $isItem;
    global $isPrint;
    global $isItemTitle;
    global $title;
    
    var_dump($isPrint);
    $name = strtoupper($name);
    echo 'startElement' . $name;
    if($name == 'RSS') {
        echo '<html>';
    } else if ($name = 'ITEM') {
        $isItem = true;
        echo '<p>';
    } else if ($name == 'TITLE') {
        echo 'Now passing TITLE start element<br/>';
        if($isItem == false) {
            echo 'Now passing block which substitutes true to $isPrint<br/>';    
            $isPrint = true;
            echo '<center>';
            echo '<h1>';        
        } else {
            $isItemTitle = true;
            echo '<h3>';
            echo '<a href="';
        }
    } else if($name == 'LINK') {
        if($isItem == true) {
            $isPrint = true;
        }
    } else if ($name == 'DESCRIPTION') {
        $isPrint = true;
        if($isItem == false) {
            echo '<center>';
        }
    }
}
function endElement($prs, $name) {
    global $isItem;
    global $isPrint;
    global $isItemTitle;
    global $title;
    
    $name = strtoupper($name);
    
    if($name == 'RSS') {
        echo '</html>';
    } else if ($name == 'ITEM') {
        $isItem = false;
        echo '</p>';
    } else if ($name == 'TITLE') {
        if ($isItem == false) {
            echo '</h1>';
            echo '</center>';
        } else {
            $isItemTitle = false;
        }
        $isPrint = false;
    } else if ($name == 'LINK') {
        if($isItem == true) {
            echo '">';
            echo $title;
            $title = "";
            echo '</a>';
            echo '</h3>';
            $isPrint = false;
        }
    } else if ($name == 'DESCRIPTION') {
        if($isItem == false) {
            echo '<br/><hr/>';
            echo '</center>';
        }
        $isPrint = false;
    }
}
function characterData($prs, $data) {
    global $isPrint;
    global $isItemTitle;
    global $title;
    
    echo 'Now passing function characterData...<br/>';
    echo '$isPrint = '; echo $isPrint ? 'true' : 'false';
    if($isPrint == true) {
        echo $data;
    } else if ($isItemTitle == true) {
        echo $title . $data;
    }
}
