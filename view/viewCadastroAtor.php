<?php

$resultado = isset($_REQUEST['resultado'])?false:0;

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

<form action="index.php?ator/cadastro" method="post">
    <input type="text" name="nome" id="" placeholder="Nome ator">
    <input type="text" name="sobrenome" id="" placeholder="Sobrenome ator">
    <button type="submit">Cadastrar Ator</button>
</form>
    <?php if(isset($_REQUEST['resultado'])): ?>
        <?php if($_REQUEST['resultado']): ?>
                <h1>Cadastro Concluido  com sucesso!</h1>
                <a href="?ator">Voltar pra home</a>
        <?php else: ?>
                <h1>Cadastro invalido!</h1>
        <?php endif;?>
    <?php endif;?>
</body>
</html>