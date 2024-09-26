<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="autor" content="Mario Iglesias Capa">
        <title>Cadenas 3</title>
    </head>
    <body>
        <?php
            $url = 'http://username:password@hostname:9090/path?arg=value#anchor';
        
            echo "Protocolo: " . (parse_url($url, PHP_URL_SCHEME)), "<br>";
            echo "Nombre usuario: " . (parse_url($url, PHP_URL_USER)), "<br>";
            echo "Path: " . (parse_url($url, PHP_URL_PATH)), "<br>";
            echo "QueryString: " . (parse_url($url, PHP_URL_QUERY));
        ?>
    </body>
</html>