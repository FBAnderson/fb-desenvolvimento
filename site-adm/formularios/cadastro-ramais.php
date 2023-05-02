<?php

if(isset($_POST['submit'])){


    include_once ('../classes/config.php');


        $ramal      =   $_POST['ramal'];
        $telefone   =   $_POST['telefone'];
        $setor      =   $_POST['setor'];
        $descricao  =   $_POST['descricao'];    

    $result = mysqli_query($conexao, "INSERT INTO ramais (ramal, telefone, setor, descricao) VALUES ('$ramal', '$telefone', '$setor', '$descricao')");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menus/formularios-cadramais.css">
    <title>Cadastro de Ramais</title>
</head>
<body>
<a href="../../principal.php" class="link-formularios"><img src="../imgs/icon-home.png" title="Clique para voltar"></a>
<div class="formulario-container">
    <h1 class="titulo-formulario">Cadastro de Ramais</h1>
    <form method="post" action="#" class="form-control">
        <label class="rotulo-campo">Ramal:&nbsp;</label>
            <input name="ramal" type="text" class="dado-campo-r" placeholder="" maxlength="6" autocomplete="off" required>
        <label class="rotulo-campo">Telefone:&nbsp;</label>
            <input name="telefone" type="text" class="dado-campo-r" placeholder="" maxlength="14" autocomplete="off" required><br>
        <label class="rotulo-campo">Setor de Atendimento:&nbsp;</label>
            <input name="setor" type="text" class="dado-campo-r" placeholder="" maxlength="50" autocomplete="off" required><br>
        <label class="rotulo-campo">Descrição:</label><br>
            <textarea name="descricao" class="historico" rows="9" cols="80"></textarea><br>
        <input type="submit" name="submit" class="btn btn-success" value="Enviar" id="submit" onclick="">
    </form>
</div>
</body>
</html>