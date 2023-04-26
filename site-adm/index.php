<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../site-adm/menus/menu.css">
    <link rel="stylesheet" href="../site-adm/menus/index-adm.css">
    <style>
  @font-face {font-family: fontsite; src: url(/site-adm/fonts/Singkong.ttf);}
  
</style>
    <title>Ferramentas | ADM</title>
</head>
<body>
<div class="navbar">
  <a href="../../../index.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Relatórios 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">TMS</a>
      <a href="#">Ramais</a>
      <a href="#">Treinamentos Realizados</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Links Importantes 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.php.net/manual/pt_BR/index.php" target="_blank">Documentação PHP</a>
      <a href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript" target="_blank">Documentação Java Script</a>
      <a href="https://laravel.com/docs/10.x" target="_blank">Documentação Laravel</a>
      <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/" target="_blank">Documentação Bootstrap</a>
    </div>
  </div> 
  <a href="index.php">Acessar ADM</a>
</div>

<div class="container">
    <h1 class="tit-formulario">Acesso ao sistema</h1>
    <form class="form-control" id="form" action="#" method="post" enctype="">  
        <label for="usuario" class="label">Usuario:</label><br>
        <input type="text" class="form" id="usuario" name="usuario" autocomplete="off"  placeholder="Digite seu usuario" required><br>
        <label for="senha" class="label">Senha:</label><br>
        <input type="password" class="form" id="senha" name="senha" maxlength="8" required><br>
        <input type="submit" class="btn btn-outline-primary" value="Acessar" name="btnAcessar" id="btnAcessar" title="Clique aqui acessar..."><br>
        <a href="../../../../index.php"><img class="logo-icon" src="imgs/icon-home.png" alt="icone de home" title="Página Inicial"></a>
    </form>
</div>

</body>
</html>