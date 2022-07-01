<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
    <link rel="shortcut icon" href="../img/logo.png">
    <title> House Shop </title>
    <meta charset="utf-8" />
    <style type="text/css">
        <?php require dirname(dirname(__FILE__)) . '\styles\accommodationList.php'; ?>
    </style>
    <!-- Link Css -->
    <link href="http://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <!-- Nav -->
        <nav class="flex-nav">
            <div class="container">
                <div class="grid menu">
                    <div class="column-xs-8 column-md-6">
                        <a href="../index.html">
                            <p id="highlight">House Shop</p>
                        </a>
                    </div>
                    <div class="column-xs-4 column-md-6">
                        <ul>
                            <li class="nav-item"><a href="login">Login</a></li>
                            <li class="nav-item"><a href="userForm">Cadastro</a></li>
                            <li class="nav-item"><a href="accommodationForm">Cadastro de acomodações</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="container-search">
        <form action="accommodationlist" method="POST">
            <select name="cidade_id">
                <option selected value="0">Cidade</option>
                <?php foreach ($cidades as $cidade) { ?>
                    <option value="<?php echo $cidade->getId(); ?>"><?php echo $cidade->getNome(); ?></option>
                <?php }; ?>
            </select>

            <select name="tipo_acomodacao_id">
                <option selected value="0">Categoria</option>
                <?php foreach ($tipos as $tipo) { ?>
                    <option value="<?php echo $tipo->getId(); ?>"><?php echo $tipo->getDescricao(); ?></option>
                <?php }; ?>
            </select>

            <select name="diaria">
                <option selected value="0">Valor da Diária</option>
                <option value="1">0-50</option>
                <option value="2">50-100</option>
                <option value="3">100-300</option>
            </select>

            </br>

            <select name="conforto1">
                <option selected value="0">Conforto 1</option>
                <?php foreach ($confortos as $conforto) { ?>
                    <option value="<?php echo $conforto->getId(); ?>"><?php echo $conforto->getDescricao(); ?></option>
                <?php }; ?>
            </select>

            <select name="conforto2">
                <option selected value="0">Conforto 2</option>
                <?php foreach ($confortos as $conforto) { ?>
                    <option value="<?php echo $conforto->getId(); ?>"><?php echo $conforto->getDescricao(); ?></option>
                <?php }; ?>
            </select>

            <select name="conforto3">
                <option selected value="0">Conforto 3</option>
                <?php foreach ($confortos as $conforto) { ?>
                    <option value="<?php echo $conforto->getId(); ?>"><?php echo $conforto->getDescricao(); ?></option>
                <?php }; ?>
            </select>

            <button>Search</button>
        </form>
    </div>

    <main>
        <ul class="product-list">
            <?php
            foreach ($acomodacoes as $acomodacao) {

            ?>
                <li class="product-item">
                    <a href="<?php echo 'accommodationPage?accommodation=' . $acomodacao->getId(); ?>" target="_blank" class="product-link">
                        <figure class="product-info">
                            <div class="product-info-img">
                                <img src="<?php echo $acomodacao->getImagemFrontal(); ?>" alt="description image">
                            </div>
                            <figcaption class="product-info-description">
                                <h2 class="title"><?php echo $acomodacao->getTipoAcomodacao()->getDescricao() . " em " . $acomodacao->getCidade()->getNome(); ?></h2>

                                <p class="description"><?php echo $acomodacao->getDescricao(); ?></p>
                                <ul class="description">
                                    <?php foreach ($acomodacao->getConfortos() as $conforto) { ?>
                                        <li value="<?php echo $conforto->getId(); ?>"><?php echo $conforto->getDescricao(); ?></li>
                                    <?php }; ?>
                                </ul>
                            </figcaption>
                            <div class="price-box">
                                <div class="price">
                                    <div>
                                        <del>R$210,00</del>
                                        <ins class="d-block"><?php echo "R$" . number_format($acomodacao->getDiaria(), 2, ',', ' ');  ?></ins>
                                    </div>

                                </div>
                                <button href="<?php header('Location:accommodationPage?accommodation=' . $acomodacao->getId(), true, 302); ?>" class="btn btn-buy">Reserva <i class="fas fa-arrow-right"></i></button>
                            </div>
                            </div>
                        </figure>
                    </a>
                </li>
            <?php
            }

            ?>


        </ul>

    </main>

    <footer class="site-footer">
        <section id="section-footer">
            <div class="container-footer">
                <h4>ABOUT</h4>
                <p>Vamos desenvolver um sistema para aluguel de imóveis por temporada, similar ao Airbnb.De uma maneira
                    geral, o sistema possibilita que pessoas se cadastrem e disponibilizem acomodações (casas,
                    apartamentos, quartos, etc.) para locação. Da mesma forma outras pessoas podem acessar o sistema
                    para buscar acomodações para locar.</p>
            </div>
            <div class="container-footer">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Contribute</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <hr>
            <h5 class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Rafael/Pedro</h5>
        </section>
    </footer>

</body>

</html>