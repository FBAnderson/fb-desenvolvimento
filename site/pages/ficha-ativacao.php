<?php

   include_once ('../../site-adm/classes/config.php');

$sql = "SELECT * FROM ficha ORDER BY id DESC";
$result = $conexao->query($sql);



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layout/ficha-ativacao.css">
    <link rel="stylesheet" href="../css/menus/barra-menus.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Ficha de Ativação</title>
</head>
<body>
    <div>
        <header class="cabecalho">
                        <a class="link-menu" href="../../../index.php"><img src="../img/icons/icon-home.png" title="Clique para voltar"></a></li>    
        </header>
        <div class="box-search">
                    <input type="search" placeholder="Pesquisar" class="form-control w-25" id="pesquisar" name="pesquisar">
                    <button class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                    </button>
            </div>           
        <div class="painel-pesquisa">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Placa</th>
                <th scope="col">Porta</th>
                <th scope="col">Ficha</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>" .$user_data['id']."</td>";
                                echo "<td>" .$user_data['placa']."</td>";
                                echo "<td>" .$user_data['porta']."</td>";
                                echo "<td>" .$user_data['ficha']."</td>";
                            }
                    ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>