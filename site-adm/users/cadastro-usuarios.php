<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../menus/formularios-cadastro.css">
    <style>
         @font-face {font-family: fontsite; src: url(/site-adm/fonts/Hashiba.ttf);}
    </style>
    <title>Cadastro de Usuarios</title>
</head>
<body>
    <a href="../../principal.php" class="link-formularios"><img src="../imgs/icon-home.png" title="Clique para voltar"></a>
    <div class="formulario-container">
    <h1 class="titulo-formulario">Cadastro de Usuários</h1>
        <form method="post" action="#" class="form-control">
            <label class="rotulo-campo">Nome do Usuario:</label><br>
            <input name="nome" type="text" class="dado-campo" placeholder="" maxlength="" autocomplete="off" required><br>
            <label class="rotulo-campo">CPF do Usuário:</label><br>
            <input name="cpf" type="text" class="dado-campo" placeholder="" maxlength="14" autocomplete="off" required><br>
            <label class="rotulo-campo">E-mail cadastrado:</label><br>
            <input name="email" type="email" class="dado-campo" placeholder="" maxlength="" autocomplete="off" required><br>
            <label class="rotulo-campo">Cadastrar a Senha:</label><br>
            <input name="senha" type="password" class="dado-campo" placeholder="" maxlength="6" autocomplete="off" required><br>
            <input type="submit" class="btn" value="Enviar" id="button" onclick="">
        </form>
    </div>
</body>
</html>