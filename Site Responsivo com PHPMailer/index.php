<?php include('config.php');?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="Palavras, chave, do, meu, site">
    <title>Projeto 1</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/all.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="<?php echo INCLUDE_PATH;?>images/engenheiro.png"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'sobre':
                echo '<target target="sobre">';
                break;
            
            case 'servicos':
                echo '<target target="servicos">';
                break;
        }

    ?>

    <header>
        <div class="center">
            <div class="logo left"><a href="<?php echo INCLUDE_PATH;?>">LOGOMARCA</a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->

            <nav class="mobile right">
                <div class="botao"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header><!--header-->

    <?php

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')) {
            if($url == "404") {
                $pg404 = true;
                include('pages/404.php');
            } else {
                include('pages/'.$url.'.php');
            }
        } else {
            if ($url != "sobre" && $url != "servicos") {
                $pg404 = true;
                include('pages/404.php');
            } else
                include('pages/home.php');
        }
    ?>

    <footer <?php if (isset($pg404) && $pg404 == true) echo "class='fixed'"?>>
        <div class="center">
            <p>Bianchi - Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCTWwgcbGR6a_63dneX0epXpFZnAq4pJbU'></script>
    <script src="<?php echo INCLUDE_PATH; ?>map.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>menu.js"></script>
</body>

</html>