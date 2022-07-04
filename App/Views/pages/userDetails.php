<?php require_once 'header.php';
?>

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
    if (!$user['acomodacoes'] || count($user['acomodacoes']) < 1) {
    ?>
        <div class="card-user-accommodation">
            <h3>Não há Acomodações cadastradas</h3>
        </div>

        <?php
    } else {
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
            if (!$user['locacoesAnfitriao'][0] || count($user['locacoesAnfitriao'][0]) < 1) {
            ?>
                <div class="card-user-location">
                    <h3>Não há Locações desse tipo</h3>
                </div>

                <?php
            } else {

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
                        </div>
            <?php
                    }
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
            if (!$user['locacoesLocatario'] || count($user['locacoesLocatario']) < 1) {
            ?>
                <div class="card-user-location">
                    <h3>Não há Locações desse tipo</h3>
                </div>

                <?php
            } else {
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
                        <?php
                        if ($locacaoLocatario->getCheckin()) {
                        ?>
                            <p style="color: green" ;>Checkin Efetuado</p>
                        <?php
                        }
                        if ($locacaoLocatario->getCancelamento()) {
                        ?>
                            <p style="color: red" ;>Cancelamento Efetuado</p>
                        <?php
                        } else if (!$locacaoLocatario->getCheckin() && !$locacaoLocatario->getCancelamento()) {
                        ?>
                            <form action="checkinRent" method="post">
                                <button class="button-location-checkin button-location-checkin-block">CHECK-IN</button>
                                <input type="hidden" name="locacao_id" value="<?php echo $locacaoLocatario->getId(); ?>">

                            </form>
                            <form action="cancelRent" method="post">
                                <button class="button-location-delete button-location-delete-block">CANCELAMENTO</button>
                                <input type="hidden" name="locacao_id" value="<?php echo $locacaoLocatario->getId(); ?>">

                            </form>

                        <?php
                        }
                        ?>
                    </div>
            <?php

                }
            }

            ?>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>