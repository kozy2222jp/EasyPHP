<html>
    <head>
        <title>sample</title>
    </head>
    <body>
        <?php 
            $msg1 = 'Hello';
            $msg2 = 'GoodBye';
            $msg3 = 'SeeYouTomorrow';
        ?>
        <table border="2">
            <tr><th>Strings</th></tr>
            <tr><td><?php echo $msg1.$msg2; ?></td></tr>
            <tr><td><?php echo $msg2.$msg3; ?></td></tr>
            <tr><td><?php echo $msg3.$msg1; ?></td></tr>
        </table>
    </body>
</html>