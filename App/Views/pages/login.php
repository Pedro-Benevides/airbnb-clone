<!DOCTYPE html>
<html lang="pt-br">

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
    <link rel="shortcut icon" href="../assets/bglogin.png">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style type="text/css">
        <?php require dirname(dirname(__FILE__)) . '\styles\login.php'; ?>
    </style>

</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="auth" method="POST">
        <h3>Login Here</h3>

        <label for="email">Email></label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button>Log In</button>
    </form>
</body>

</html>