<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
        
        buy('鉛筆');
        buy("消しゴム");
        
        function buy($pr)
        {
            echo "<hr/>\n";
            echo "商品「{$pr}」をお買い上げいただきました。";
            echo "<hr/>\n";
        }
        
        ?>
    </body>
</html>