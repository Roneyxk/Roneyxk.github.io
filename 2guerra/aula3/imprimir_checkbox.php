<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["bt_enviar"])){
        //aramzena a categoria de fileperms
    $filmes= $_POST["filmes"];


    //imprime o array de categoria de filmes
    print_r($filmes);    
    }
?>

</body>
</html>