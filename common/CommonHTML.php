<?php
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
/**
 * <tr>タグの出力
 */
function BeginTableRow(){
    echo '<tr>';
}
/**
 * </tr>タグの出力
 */
function EndTableRow() {
    echo '</tr>';
}
/**
 * <td>タグの出力
 */
function BeginTableData(){
    echo '<td>';
 }
/**
 * </table>タグの出力
 */
 function EndTable(){
     echo '</table>';
 }
/**
 * 引数の$data文字列を<td></td>で囲んだHTMLを出力します。 
 * @param type $data
 */
 function OutputTableData($data  = ''){
     echo "<td>{$data}</td>";
}
/*
 * </body></html>を出力します。
 */
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
