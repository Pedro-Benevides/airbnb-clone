<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
    <link rel="shortcut icon" href="../assets/logo.png">
    <title>House Shop</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- Link Css -->
    <style type="text/css">
        <?php require dirname(dirname(__FILE__)) . '\styles\form.php'; ?>
    </style>
    <!-- Link Css -->

</head>

<body class="confirmd">

    <div class="confirmd">

        <form action="rentRegister" method="POST">

            <h3>Confirmação da compra</h3>

            <label for="period">Período</label>
            <input type="text" id='period' placeholder="<?php echo "De " . date("d/m/y", strtotime($dataInicio)) . " até " . date("d/m/y", strtotime($dataFim))  ?>" readonly>

            <label for="cost">Valor da Diaria</label>
            <input type="text" id="cost" placeholder="<?php echo "R$" . number_format($acomodacao->getDiaria(), 2, ',', ' ');  ?>" readonly>

            <button type="submit" class="buttonD">Confirmar</button>

            <a href="accommodationList">
                <button type="button" class="buttonC">Cancelar</button>
            </a>
            <input type="hidden" name="valor" value="<?php echo $acomodacao->getDiaria(); ?>">
            <input type="hidden" name="data_inicio" value="<?php echo $dataInicio; ?>">
            <input type="hidden" name="data_fim" value="<?php echo $dataFim; ?>">
            <input type="hidden" name="acomodacao_id" value="<?php echo $acomodacao->getId(); ?>">
        </form>


    </div>

</body>

</html>