<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php 
            $product = array(
                '鉛筆','はさみ','カッター','ホッチキス','パンチ'
            );
        ?>
        <table border="2">
            <tr><th>商品</th></tr>
            <?php 
                for ($i = 0;$i < count($product);$i++){
                    echo "<tr><td>{$product[$i]}</td></tr>";
                }
            ?>
        </table>
    </body>
</html>