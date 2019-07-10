<?php

    $atores = $_REQUEST['atores']?$_REQUEST['atores']:0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Atores</h1>

    <ul>
        <?php if($atores):?>
            <?php foreach($atores as $ator): ?>
                    <li><?php echo $ator->primeiro_nome; ?></li>
            <?php endforeach; ?>   
        <?php else: ?>
                <li>Nâo existem atores</li>  
        <?php endif; ?>          
    </ul>
</body> 
</html>