<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
    <link rel="shortcut icon" href="img/logo.png">
    <title>House Shop</title>
    <meta charset="utf-8" />
    <link href="http://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Link Css -->
    <style type="text/css">
        <?php require dirname(dirname(__FILE__)) . '\styles\index.php'; ?>
    </style>
    <!-- Link Css -->
</head>

<body>

    <main>

        <!-- details profile -->
        <section id="section-profile">
            <div class="container-profile">
                <div class="profile">
                    <h1>Detalhes do Usuario</h1>
                </div>

                <p>Nome: <?php echo $user['nome']; ?></p>
                <p>CPF: <?php echo $user['cpf']; ?></p>
                <p>Email: <?php echo $user['email']; ?></p>
                <p>Telefone: <?php echo $user['telefone']; ?></p>
            </div>
        </section>

        <!-- user_card -->
        <section id="section-card">
            <div class="container-card">
                <div class="card">
                    <h1>Cartão </h1>
                </div>
                <?php
                if ($user['cartao']) {
                ?>
                <?php
                } else {
                ?>
                    <a href="cardForm">
                        <button class="button-card-new button-card-new-block">NEW</button>
                    </a>
                <?php
                }
                ?>
            </div>
        </section>

        <!-- cards cards_user -->
        <section id="cards">
            <div class="container-cards card-user-card-wrapper">
                <div class="card-user-card">
                    <?php
                    if ($user['cartao']) {
                    ?>
                        <h2><?php echo $user['cartao']->getTitular()->getNome(); ?></h2>
                        <p><?php echo $user['cartao']->getNumero(); ?></p>
                        <p><?php echo $user['cartao']->getVencimento(); ?></p>
                    <?php
                    } else {
                    ?>
                        <h2>Não há cartão cadastrado</h2>

                    <?php
                    }
                    ?>
                    <button class="button-card-delete button-card-delete-block">DELETE</button>
                </div>
            </div>
        </section>

        <!-- user_accommodation -->
        <section id="section-accommodation">
            <div class="container-accommodation">
                <div class="accommodation">
                    <h1>Suas acomodações: </h1>
                </div>
            </div>
        </section>

        <!-- cards user_accommodation -->
        <?php
        foreach ($user['acomodacoes'] as $index => $acomodacao) {
        ?>
            <section id="cards">
                <div class="container-accommodation card-user-accommodation-wrapper">

                    <div class="card-user-accommodation">
                        <h2>CATEGORIA: <?php echo $acomodacao->getTipoAcomodacao()->getDescricao() . " em " . $acomodacao->getCidade()->getNome(); ?></h2>
                        <h2>DIARIA: <?php echo "R$" . number_format($acomodacao->getDiaria(), 2, ',', ' ');  ?></h2>
                        <h2>DESCRIÇÃO: <?php echo $acomodacao->getDescricao(); ?></h2>
                        <p>CAPACIDADE: <?php echo $acomodacao->getCapacidade() . " hóspedes"; ?></p>
                        <p>CONFORTOS: <?php
                                        echo implode(', ', array_map(function ($conforto) {
                                            return $conforto->getDescricao();
                                        }, $acomodacao->getConfortos()));
                                        ?>
                        </p>

                        <button class="button-accommodation-delete button-accommodation-delete-block" />DELETE</button>
                    </div>
                </div>
            </section>
        <?php
        }

        ?>

        <!-- user_location -->
        <section id="section-location">
            <div class="container-location">
                <div class="location">
                    <h1>Locações em que você é Anfitrião:</h1>
                </div>
            </div>
        </section>

        <!-- cards user_location -->
        <section id="cards">
            <div class="container-location card-user-location-wrapper">
                <?php
                foreach ($user['locacoesAnfitriao'] as $locacaoAnfitriao) {
                    foreach ($locacaoAnfitriao as $locacaoAcomodacao) {

                ?>
                        <div class="card-user-location">
                            <h2>LOCATARIO: <?php
                                            echo $locacaoAcomodacao->getLocatario()->getNome() .
                                                ", Email: " . $locacaoAcomodacao->getLocatario()->getEmail() .
                                                ", Telefone: " . $locacaoAcomodacao->getLocatario()->getTelefone(); ?></h2>
                            <h2>ACOMODAÇÃO: <?php echo $locacaoAcomodacao->getAcomodacao()->getTipoAcomodacao()->getDescricao() .
                                                " em " . $locacaoAcomodacao->getAcomodacao()->getCidade()->getNome(); ?></h2>
                            <p>DATA INICIO: <?php echo $locacaoAcomodacao->getDataInicio() ?></p>
                            <p>DATA FIM: <?php echo $locacaoAcomodacao->getDataInicio() ?></p>
                            <button class="button-location-checkin button-location-checkin-block">CHECK-IN</button>
                            <button class="button-location-delete button-location-delete-block">CANCELAMENTO</button>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
        </section>

        <!-- user_location -->
        <section id="section-location">
            <div class="container-location">
                <div class="location">
                    <h1>Locações em que você é Locatario:</h1>
                </div>
            </div>
        </section>

        <!-- cards user_location -->
        <section id="cards">
            <div class="container-location card-user-location-wrapper">
                <?php
                foreach ($user['locacoesLocatario'] as $index => $locacaoLocatario) {
                ?>

                    <div class="card-user-location">
                        <h2>ANFITRIÂO: <?php echo $user['anfitrioesLocacoes'][$index]->getNome() .
                                            ", Email: " . $user['anfitrioesLocacoes'][$index]->getEmail() .
                                            ", Telefone: " . $user['anfitrioesLocacoes'][$index]->getTelefone(); ?></h2>
                        <h2>ACOMODAÇÃO: <?php echo $locacaoLocatario->getAcomodacao()->getTipoAcomodacao()->getDescricao() .
                                            " em " . $locacaoLocatario->getAcomodacao()->getCidade()->getNome(); ?></h2>
                        <p>DATA INICIO: <?php echo $locacaoLocatario->getDataInicio() ?></p>
                        <p>DATA FIM: <?php echo $locacaoLocatario->getDataInicio() ?></p>
                        <button class="button-location-checkin button-location-checkin-block">CHECK-IN</button>
                        <button class="button-location-delete button-location-delete-block">CANCELAMENTO</button>
                    </div>
                <?php
                }

                ?>
            </div>
        </section>
    </main>


</body>

</html>