<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST["bt_enviar"]))  
{
    $nota = $_POST["nota"];
    echo($nota);
}

    ?>
</body>
</html>