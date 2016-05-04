<html>
    <head>
        <title>サンプル</title>
    </head>
    <body>
        <table border="2">
            <tr><?php printf('<td>10進数</td><td>%d</td>',18); ?></tr>
            <tr><?php printf('<td>2進数</td><td>%b</td>',18); ?></tr>
            <tr><?php printf('<td>8進数</td><td>%o</td>',18); ?></tr>
            <tr><?php printf('<td>16進数</td><td>%x</td>',18); ?></tr>
            <tr><?php printf('<td>浮動小数点数(3桁)</td><td>%.3f</td>', 3.14); ?></tr>
            <tr><?php printf('<td>16進数(6桁)</td><td>%.6f</td>', 3.14); ?></tr>
            <tr><?php printf('<td>文字列</td><td>%s</td>', 'Hello'); ?></tr>
        </table>
    </body>
</html>