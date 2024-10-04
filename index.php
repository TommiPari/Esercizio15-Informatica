<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaLista($num, $type) {
            if ($type != 'o') $type = 'u';
            $lista = '<'.$type.'l>';
            for ($i = 1; $i <= $num; $i++) {
                if ($i%5==0) {
                    $lista .= '<li>' . $i . '</li>';
                }
            }
            return $lista . '<'.$type.'l>';;
        }
        echo stampaLista(rand(5,100), 'o');
    ?>
</body>
</html>