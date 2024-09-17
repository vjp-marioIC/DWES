<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Cadenas 3</title>
    </head>
    <body>
        <?php
            $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
        
            echo (parse_url($url, PHP_URL_SCHEME)), "<br>";
            echo (parse_url($url, PHP_URL_USER)), "<br>";
            echo (parse_url($url, PHP_URL_PATH)), "<br>";
            echo (parse_url($url, PHP_URL_QUERY));
        ?>
    </body>
</html>