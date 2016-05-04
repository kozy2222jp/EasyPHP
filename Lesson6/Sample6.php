<html>
    <head>
        <title>sample</title>
    </head>
    <?php
        $fruits = array(
            "apple","orange","banana","grape","melon"
        );
    ?>
    <table border="2">
        <tr style="background-color:#AAAAAA;">
            <td>Number</td><td>Name Of Fruits</td>
        </tr>
        <?php
            foreach ($fruits as $id => $fruit) {
                echo "<tr><td>$id</td><td>$fruit</td></tr>";
            }
        ?>
    </table>
</html>