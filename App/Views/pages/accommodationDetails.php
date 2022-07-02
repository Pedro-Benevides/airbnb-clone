<!DOCTYPE html>
<html>
<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../img/logo.png">
  <title> House Shop </title>
  <meta charset="utf-8" />
  <!-- Link Css -->
  <link href="http://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <style type="text/css">
    <?php require dirname(dirname(__FILE__)) . '\styles\accommodationDetails.php'; ?>
  </style>




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
              <?php
              if ($loggedUser) {
              ?>
                <li class="nav-item"><a href="accommodationList">Buscar acomodações</a></li>
                <li class="nav-item"><a href="accommodationRegister">Cadastro de acomodações</a></li>
              <?php
              } else {
              ?>
                <li class="nav-item"><a href="login">Login</a></li>
                <li class="nav-item"><a href="register">Cadastro</a></li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="ss">
    <div class="container">
      <div class="grid product">
        <div class="column-xs-12 column-md-7">
          <div class="product-gallery">
            <div class="product-image">
              <img class="active" src="<?php echo $acomodacao->getImagemFrontal(); ?>">
            </div>
            <ul class="image-list">
              <img src="" alt="description image">
              <li class="image-item"><img src="<?php echo $acomodacao->getImagemInterior(); ?>"></li>
              <li class="image-item"><img src="<?php echo $acomodacao->getImagemAdicional(); ?>"></li>
            </ul>
          </div>
        </div>
        <div class="column-xs-12 column-md-5">
          <h1><?php echo $acomodacao->getTipoAcomodacao()->getDescricao(); ?></h1>
          <h2><?php echo "R$" . number_format($acomodacao->getDiaria(), 2, ',', ' ');  ?></h2>
          <div class="description">
            <p><?php echo $acomodacao->getDescricao(); ?></p>
            <ul>
              <li>
                <p><?php echo "Ideal para " . $acomodacao->getCapacidade() . " Hóspedes"; ?></p>
              </li>
              <?php foreach ($acomodacao->getConfortos() as $conforto) { ?>
                <li>
                  <p><?php echo $conforto->getDescricao(); ?></p>
                </li>
              <?php }; ?>
            </ul>

            <?php
            if ($loggedUser->getCartao()) {
            ?>
              <form action="confirm" method="post">
              <?php
            } else {
              ?>
                <form action="cardRegister" method="post">
                <?php
              }
                ?>
                <p>Check In: <input class="add-to-date" type="date" placeholder="Check IN" name="dataInicio"></p>

                <p>Check Out: <input class="add-to-date" type="date" placeholder="Check OUT" name="dataFim"></p>

                <button class="add-to-cart">Fazer Reserva</button>
                </form>
          </div>
        </div>
      </div>



      <!-- Comentarios -->
      <?php foreach ($acomodacao->getComentarios() as $comentario) { ?>
        <div class="container-comment">
          <h1><?php echo $comentario->getAutor()->getNome(); ?></h1>
          <p><?php echo $comentario->getComentario(); ?></p>
        </div>
      <?php }; ?>
    </div>
  </main>



  <footer class="site-footer">
    <section id="section-footer">
      <div class="container-footer">
        <h4>ABOUT</h4>
        <p>Vamos desenvolver um sistema para aluguel de imóveis por temporada, similar ao Airbnb. De uma maneira geral, o sistema possibilita que pessoas se cadastrem e disponibilizem acomodações (casas, apartamentos, quartos, etc.) para locação. Da mesma forma outras pessoas podem acessar o sistema para buscar acomodações para locar.</p>
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

  <!-- js -->

  <script src="../js/details.js"></script>

</body>

</html>