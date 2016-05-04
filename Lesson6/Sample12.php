<html>
    <head>
        <title>sammple</title>
    </head>
    <body>
        <?php
            require_once '/../common/CreateTable.php';
            
            $stock = array(
                'orange' => 80,
                'strawberry' => 60,
                'apple' => 22,
                'peach' => 50,
                'chestnut' => 75,
            );
            echo '<h3>Before Ordering</h3>';
            CreateTable('Fruits', 'Inventory Figures', $stock);
            ksort($stock);
            echo '<h3>After Ordering</h3>';
            CreateTable('Fruits', 'Inventory Figures', $stock);
        ?>
    </body>
</html>