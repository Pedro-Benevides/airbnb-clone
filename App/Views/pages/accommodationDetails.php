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
              <li class="nav-item"><a href="login">Login</a></li>
              <li class="nav-item"><a href="register">Cadastro</a></li>
              <li class="nav-item"><a href="accommodationList">Buscar acomodações</a></li>
              <li class="nav-item"><a href="accommodationRegister">Cadastro de acomodações</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="ss">
    <div class="container">
      <div class="grid second-nav">
        <div class="column-xs-12">
          <nav>
            <ol class="breadcrumb-list">
              <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="accommodationList.html">Tower</a></li>
              <li class="breadcrumb-item active">Tower City</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="grid product">
        <div class="column-xs-12 column-md-7">
          <div class="product-gallery">
            <div class="product-image">
              <img class="active" src="../img/tower city.jpg">
            </div>
            <ul class="image-list">
              <li class="image-item"><img src="../img/tower city.jpg"></li>
              <li class="image-item"><img src="../img/tower city.jpg"></li>
              <li class="image-item"><img src="../img/tower city.jpg"></li>
            </ul>
          </div>
        </div>
        <div class="column-xs-12 column-md-5">
          <h1>Tower City</h1>
          <h2>$210.00</h2>
          <div class="description">
            <p>aconchegante com uma grande variedade de plantas, espaço ventilado, e com 2 andares sendo os quartos na parte de baixo e na parte de cima, sala de estar. cozinha, lavanderia, varanda, e coworking.</p>
            <ul>
              <li>
                <p>2 Hóspedes</p>
              </li>
              <li>
                <p>1 Quarto</p>
              </li>
              <li>
                <p>1 Cama</p>
              </li>
              <li>
                <p>1 Banheiro Compartilhado</p>
              </li>
              <li>
                <p>WI-FI</p>
              </li>

            </ul>

            <form action="cardRegister.html">
              <p>Check In: <input class="add-to-date" type="date" placeholder="Check IN" id="check in"></p>

              <p>Check Out: <input class="add-to-date" type="date" placeholder="Check OUT" id="check out"></p>

              <button class="add-to-cart">Fazer Reserva</button>
            </form>
          </div>
        </div>
      </div>



      <!-- Comentarios -->

      <!-- comentario-->
      <div class="container-comment">
        <h1>Pedro Victor</h1>
        <h2>20 Minutos Atrás</h2>
        <p>Casa E quando todos nos acolhem e não dão as boas-vindas a nenhum dos nossos negócios, nenhuma dessas
          dores está relacionada à forma como esses sintomas ocorrem. Eles estão se afastando dos prazeres,
          mas da efeminação!</p>
      </div>

      <div class="container-comment">
        <h1>Rafael Cruz</h1>
        <h2>5 Minutos Atrás</h2>
        <p>Casa E quando todos nos acolhem e não dão as boas-vindas a nenhum dos nossos negócios, nenhuma dessas
          dores está relacionada à forma como esses sintomas ocorrem. Eles estão se afastando dos prazeres,
          mas da efeminação!</p>
      </div>





      <div class="grid related-products">
        <div class="column-xs-12">
          <h3>Você pode gostar</h3>
        </div>
        <div class="column-xs-12 column-md-4">
          <img src="../img/tower city.jpg">
          <a href="">
            <h4>Tower City</h4>
          </a>
          <p class="price">$120.00</p>
        </div>
        <div class="column-xs-12 column-md-4">
          <img src="../img/tower city.jpg">
          <a href="">
            <h4>Tower City</h4>
          </a>
          <p class="price">$299.99</p>
        </div>
        <div class="column-xs-12 column-md-4">
          <img src="../img/tower city.jpg">
          <a href="">
            <h4>Tower City</h4>
          </a>
          <p class="price">$99.99</p>
        </div>
      </div>
    </div>
  </main>



  <footer class="site-footer">
    <section id="section-footer">
      <div class="container-footer">
        <h4>ABOUT</h4>
        <p>Vamos desenvolver um sistema para aluguel de imóveis por temporada, similar ao Airbnb.De uma maneira geral, o sistema possibilita que pessoas se cadastrem e disponibilizem acomodações (casas, apartamentos, quartos, etc.) para locação. Da mesma forma outras pessoas podem acessar o sistema para buscar acomodações para locar.</p>
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