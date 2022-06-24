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
                            <li class="nav-item"><a href="register">Cadastro</a></li>
                            <li class="nav-item"><a href="accommodationRegister">Cadastro de acomodações</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="container-search">
        <form>
            <select>
                <option selected value="0">City</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">2</option>
            </select>

            <select>
                <option selected value="0">State</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <select>
                <option selected value="0">Category</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <select>
                <option selected value="0">Value Diary</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <select>
                <option selected value="0">Comfort 1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">2</option>
            </select>

            <select>
                <option selected value="0">Comfort 2</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <select>
                <option selected value="0">Comfort 3</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <button>Search</button>
        </form>
    </div>



    <main>
        <ul class="product-list">
            <li class="product-item">
                <a href="accommodationDetails.html" target="_blank" class="product-link">
                    <figure class="product-info">
                        <div class="product-info-img">
                            <img src="../img/tower city.jpg" alt="description image">
                        </div>
                        <figcaption class="product-info-description">
                            <h2 class="title">Tower City</h2>

                            <p class="description">aconchegante com uma grande variedade de plantas, espaço ventilado..</p>
                            <ul class="description">
                                <li>Ar Condicionado</li>
                                <li>WI-FI</li>
                                <li>Jacuzzi</li>
                                <li>2 Camas</li>
                            </ul>
                        </figcaption>
                        <div class="price-box">
                            <div class="price">
                                <div>
                                    <del>R$210,00</del>
                                    <ins class="d-block">R$200,00</ins>
                                </div>

                            </div>
                            <button href="accommodationDetails" class="btn btn-buy">Reserva <i class="fas fa-arrow-right"></i></button>
                        </div>
                        </div>
                    </figure>
                </a>
            </li>


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