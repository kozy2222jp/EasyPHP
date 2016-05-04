<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php
        buy();
        
        echo "もう一回商品を購入します。<br/>\n";
        
        buy();
        
        function buy()
        {
            echo "<hr/>\n";
            echo "商品をお買い上げいただきました。<br/>\n";
            echo "<hr/>\n";
        }
        ?>
    </body>
</html>