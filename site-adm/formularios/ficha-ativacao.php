<?php

if(isset($_POST['submit'])){


    include_once ('../classes/config.php');


        $placa = $_POST['placa'];
        $porta = $_POST['porta'];
        $ficha = $_POST['ficha'];    

    $result = mysqli_query($conexao, "INSERT INTO ficha (placa, porta, ficha) VALUES ('$placa', '$porta', '$ficha')");

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menus/formularios-ficha.css">
    <title>Ficha de Ativação Omnilink</title>
    <script>
        function mascara_placa(){
            var placa = document.getElementById('placa');
            if(placa.value.length == 3){
                placa.value += "-";
            }
        }
    </script>
</head>
<body>
<a href="../../principal.php" class="link-formularios"><img src="../imgs/icon-home.png" title="Clique para voltar"></a>
<div class="formulario-container">
    <h1 class="titulo-formulario">Ficha de Ativação - Omnilink</h1>
    <form method="post" action="ficha-ativacao.php" class="form-control">
        <label class="rotulo-campo">Placa:&nbsp;</label>
        <input name="placa" type="text" class="dado-campo-r" placeholder="" maxlength="8" autocomplete="off" id="placa" onkeyup="mascara_placa()" required>
        <label class="rotulo-campo">Porta Omnilink:&nbsp;</label>
        <input name="porta" type="text" class="dado-campo-r" placeholder="" maxlength="4" autocomplete="off" id="porta" required><br>
        <label class="rotulo-campo">Ficha - dados:</label><br>
        <textarea name="ficha" id="ficha" class="historico" rows="20" cols="80"></textarea><br>
        <input type="submit" name="submit" class="btn btn-success" value="Gravar" id="submit">
    </form>
</div>
</body>
</html>