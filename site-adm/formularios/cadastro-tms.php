<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menus/formularios-cadtms.css">
    <title>Cadastro de TMS</title>
</head>
<body>
<a href="../../principal.php" class="link-formularios"><img src="../imgs/icon-home.png" title="Clique para voltar"></a>
<div class="formulario-container">
    <h1 class="titulo-formulario">Cadastro de TMS</h1>
    <form method="post" action="#" class="form-control">
        <label class="rotulo-campo">Cliente Parceiro:</label><br>
        <input name="empresa" type="text" class="dado-campo" placeholder="" maxlength="" autocomplete="off" required><br>
        <label class="rotulo-campo">Serviço de TMS:</label><br>
        <select class="dado-campo" placeholder="" maxlength="" autocomplete="off" required>
            <option value="SSW" class="dado-campo">SSW</option>
            <option value="Bsoft" class="dado-campo">Bsoft</option>
            <option value="A3" class="dado-campo">A3Software</option>
            <option value="DSS" class="dado-campo">DSS</option>
            <option value="Datapar" class="dado-campo">Datapar</option>
            <option value="ESL" class="dado-campo">ESL</option>
            <option value="Escala-soft" class="dado-campo">Escala Soft</option>
            <option value="Rodopar" class="dado-campo">Rodopar</option>
            <option value="SistGlobal" class="dado-campo">SistGlobal</option>
            <option value="MultiSotware" class="dado-campo">Multisoftware</option>
            <option value="AtenaInformatica" class="dado-campo">Atena Informática</option>
            <option value="O2" class="dado-campo">O<sub>2</sub></option>
            <option value="Alisson" class="dado-campo">Alisson</option>
            <option value="Brudam" class="dado-campo">Brudam</option>
            <option value="Software-proprietario" class="dado-campo">Software-proprietario</option>
            <option value="Atena" class="dado-campo">Atena</option>
        </select><br>        
        <label class="rotulo-campo">Contato:</label><br>
        <input name="contato" type="text" class="dado-campo" placeholder="" maxlength="" autocomplete="off" required><br>
        <label class="rotulo-campo">E-mail cadastrado:</label><br>
        <input name="email" type="email" class="dado-campo" placeholder="" maxlength="" autocomplete="off" required><br>
        <label class="rotulo-campo">Tarefa recebida em:</label><br>
        <input name="inicio" type="datetime-local" class="dado-campo" placeholder="" maxlength="" autocomplete="off" required><br>
        <label class="rotulo-campo">Histórico de Atendimento:</label><br>
        <textarea name="historico" class="historico" rows="4" cols="45"></textarea><br>
        <input type="submit" class="btn btn-success" value="Enviar" id="button" onclick="">
    </form>
</div>
</body>
</html>