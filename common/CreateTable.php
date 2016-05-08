<?php
/**
 * 指定されたタイトルをヘッダーに、
 * 2列の配列表示テーブルHTMLを出力します。
 * @param type $title1 1列目タイトル
 * @param type $title2 2列目タイトル
 * @param type $values データ格納配列
 */
function CreateTable($title1,$title2,$values = array()){
    echo "<table border=\"2\">\n";
    echo "<tr style=\"background-color:#888888;\">\n";
    echo "<td>$title1</td><td>$title2</td>\n";
    echo "</tr>\n";
    foreach ($values as $key => $value) {
        echo "<tr>\n";
        echo "<td>$key</td><td>$value</td>";
        echo "</tr>\n";
    }
    echo "</table>\n";
}
/**
 * 引数をタイトルとするHTMLの<head>～<body>までの
 * <html>文を出力します。
 * @param string $title
 */
function CreateHeader($title = 'sample'){
    echo '<html>';
    echo '<head>';
    echo "<title>$title</title>";
    echo '</head>';
    echo '<body>';
}
/**
 * </body>
 * </head>を出力します。
 */
function CreateBody(){
    echo '</body>';
    echo '</head>';
}
/**
 * テーブルのヘッダータイトルを生成します。
 * </table>閉じタグは設定されていません。
 * @param int $numTitle ヘッダーの個数
 * @param array $titles ヘッダーの個数だけ設定されたタイトル文字列配列
 */
function CreateTableHeader($numTitle,$titles = array()){
    echo '<table border="2">';
    echo '<tr style="background-color:#AAAAAA">';
    foreach($titles as $val){
        echo "<td>{$val}</td>";
    }
    echo '</tr>';
}
function BeginTableRow(){
    echo '<tr>';
}
function BeginTableData(){
    echo '<td>';
 }
 function EndTableData(){
     echo '</td>';
 }
 function EndTableRow(){
     echo '</tr>';
 }
 function EndTable(){
     echo '</table>';
 }
function OutputTableData($data){
     echo "<td>{$data}</td>";
}
function CreateFooter(){
    echo '</body>';
    echo '</html>';
}

/**
 * 定数を管理するクラスです。
 */
class ComConstants {
    /** 実行中のphpスクリプトのローカルホストパスを返します。 */
    public static function getThisPHPFilePath() {
        return 'http://localhost' . $_SERVER['PHP_SELF'];
    }
}
/**
 * 引数の文字列をハイライトタグで囲み出力します
 * @param type $level ハイライトのレベル
 * @param type $str ハイライトタグで囲みたい文字列
 */
function OutputHightlight($level = 1, $str = '') {
    echo "<h{$level}>{$str}</h{$level}>";
}
