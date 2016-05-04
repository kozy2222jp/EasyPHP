<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
        
        $total = buy('鉛筆',2,2000);
        
        echo "合計{$total}円です。<br/>\n";
        
        function buy($product,$price,$num)
        {
            echo "<hr/>\n";
            echo "商品「{$product}」を{$price}円で{$num}個お買い上げ頂きました。<br/>\n";
            echo "<hr/>\n";
            
            return $price * $num;
        }
        ?>
    </body>
</html>
