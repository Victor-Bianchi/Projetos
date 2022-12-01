<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="Palavras, chave, do, meu, site">
    <title>Projeto 1</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="images/engenheiro.png"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->

            <nav class="mobile right">
                <div class="botao"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header><!--header-->

    <section class="banner">
        <div class="overlay"></div><!--overlay-->
        <div class="center">
            <form method="POST">
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="submit" value="Cadastrar">
            </form>
        </div><!--center-->
    </section><!--banner-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Victor N. Bianchi</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus cumque voluptatum nisi. Vel eaque modi aliquam earum necessitatibus qui, suscipit odit et, adipisci repudiandae id ipsam iusto, ad similique corrupti?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, similique cum sit illo odio quo aliquam eum quisquam. Vel reprehenderit reiciendis voluptates. Delectus magni quaerat, praesentium inventore dolorum quibusdam libero!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem veritatis alias et. Sint modi consectetur debitis corporis consequuntur assumenda, pariatur, corrupti fugiat doloribus officiis ab quis in molestiae accusamus adipisci.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti eveniet dicta sequi necessitatibus nobis repellendus adipisci itaque rem perspiciatis dolore, voluptatibus aut veritatis facilis iure impedit quaerat et ducimus quo!</p>
            </div><!--w50-->

            <div class="w50 left">
                <img class="right" src="images/eu.jpg" alt="foto do autor">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidades w33 left">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis mollitia quidem totam voluptas et? Error earum totam mollitia vitae porro animi sed, nulla dignissimos sint! Tempore voluptas at perferendis ex! Ipsum, Ipsum!</p>
            </div> <!--box-especialidades-->

            <div class="box-especialidades w33 left">
                <h3><i class="fa-brands fa-css3-alt"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis mollitia quidem totam voluptas et? Error earum totam mollitia vitae porro animi sed, nulla dignissimos sint! Tempore voluptas at perferendis ex! Ipsum, Ipsum!</p>
            </div> <!--box-especialidades-->

            <div class="box-especialidades w33 left">
                <h3><i class="fa-brands fa-square-js"></i></h3>
                <h4>JavaScript ES6</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis mollitia quidem totam voluptas et? Error earum totam mollitia vitae porro animi sed, nulla dignissimos sint! Tempore voluptas at perferendis ex! Ipsum, Ipsum!</p>
            </div> <!--box-especialidades-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--especialidades-->
    
    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet minus quod fugit dolores inventore obcaecati ex delectus tempora est! Quae enim sed itaque quis minus quisquam et laudantium placeat vel.</p>
                    <p class="nome-autor">Lorem Elit</p>
                </div><!--depoimento-single-->

                <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, quo distinctio voluptatum voluptas officiis optio possimus eos explicabo illum dignissimos aspernatur laboriosam tenetur, repellat quas necessitatibus blanditiis ipsum impedit eius.</p>
                    <p class="nome-autor">Dolor Sit</p>
                </div><!--depoimento-single-->
            </div><!--w50 left depoimentos-container-->

            <div class="w50 right servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos-desc">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quaerat a facilis illum reprehenderit quo nobis quod voluptatum vitae, expedita animi nesciunt, voluptatem dolores provident atque esse nemo pariatur sunt.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci cupiditate veniam rem molestias dolorem odit, minus, dicta voluptatem quibusdam eligendi minima labore id provident deleniti mollitia fugiat iure. Dolor, laudantium.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nobis asperiores saepe quo nihil necessitatibus mollitia consectetur quis, hic eveniet officia ut sapiente laborum error at? Esse architecto magni libero?</li>
                    </ul>
                </div><!--servicos-desc-->
            </div><!--w50 right servicos container-->
            <div class="clear"></div>

        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>Bianchi - Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="script.js"></script>
</body>

</html>