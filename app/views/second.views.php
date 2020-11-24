<?php

require_once ("C:/xampp/htdocs/bonesphp/config/settings.php");
require_once ("config/database.php");
require_once("vendor/core/routes.systems.php");

echo "Second views görüntüleninyor...";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second</title>
</head>
<body>

    <ul>
        <li><a href=<?php Routes::web("home"); ?>>Home</a></li>
        <li><a href=<?php Routes::web("second"); ?>>Second</a></li>


    </ul>
</body>
</html>