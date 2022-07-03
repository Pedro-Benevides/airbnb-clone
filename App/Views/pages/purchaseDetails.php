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

<body>

    <div class="confirmd">

        <form action="locate" method="POST">

            <h3 style="color: black;">Confirmação da compra</h3>


            <h3 style="color: black;">Periodo</h3>
            <h1><?php echo "De " . $dataInicio . " até " . $dataFim  ?></h1>



            <h3 style="color: black;">Valor da Diaria</h3>
            <h1><?php echo "R$" . number_format($acomodacao->getDiaria(), 2, ',', ' ');  ?></h1>


            <button type="submit" class="buttonD">Confirmar</button>

        </form>


    </div>

</body>

</html>