<?php





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
    <form method="post" action="#" class="form-control">
        <label class="rotulo-campo">Placa:&nbsp;</label>
        <input name="placa" type="text" class="dado-campo-r" placeholder="" maxlength="8" autocomplete="off" id="placa" onkeyup="mascara_placa()" required>
        <label class="rotulo-campo">Porta:&nbsp;&nbsp;&nbsp;</label>
        <select class="dado-campo" placeholder="" maxlength="" autocomplete="off" required>
            <option value="portas" class="dado-campo">Selecione a Porta</option>
            <option value="compartilhada" class="dado-campo">Porta 9001</option>
            <option value="pamsat" class="dado-campo">Porta 9007</option>
            <option value="pma" class="dado-campo">Porta 9002</option>
        </select><br>        
        <label class="rotulo-campo">Ficha - dados:</label><br>
        <textarea name="ficha" class="historico" rows="9" cols="80"></textarea><br>
        <input type="submit" class="btn btn-success" value="Gravar" id="button" onclick="">
    </form>
</div>
</body>
</html>