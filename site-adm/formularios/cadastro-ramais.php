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
        <label class="rotulo-campo">Setor:&nbsp;&nbsp;&nbsp;</label>
        <select class="dado-campo" placeholder="" maxlength="" autocomplete="off" required>
            <option value="Compartilhada" class="dado-campo">Central Compartilhada</option>
            <option value="Pamsat-um" class="dado-campo">Central Pamsat I</option>
            <option value="Pamsat-dois" class="dado-campo">Central Pamsat II</option>
            <option value="Krona-Oeste" class="dado-campo">Central Krona Oeste</option>
            <option value="Administrativo" class="dado-campo">ADM / RH / DP / Financeiro</option>
            <option value="Diretoria" class="dado-campo">Diretoria</option>
            <option value="cto" class="dado-campo">CTO</option>
            <option value="Projetos" class="dado-campo">Setor de Projetos</option>
            <option value="Qualidade" class="dado-campo">Setor de Qualidade</option>
            <option value="pma" class="dado-campo">Central PMA</option>
        </select><br>        
        <label class="rotulo-campo">Descrição:</label><br>
        <textarea name="historico" class="historico" rows="9" cols="80"></textarea><br>
        <input type="submit" class="btn btn-success" value="Enviar" id="button" onclick="">
    </form>
</div>
</body>
</html>