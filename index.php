<?php

require_once "config\settings.php";
require_once "vendor\core\basic.systems.php";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Routes</title>
    <?php

        echo "Routes sistemine yönlendiriliyorsunuz...";

        header("Refresh:0.5;url=http://localhost/Bonesphp/routes/web.php");
        //header("Location:http://localhost/Bonesphp/routes/web.php");


    ?>

</head>
<body>

</body>
</html>