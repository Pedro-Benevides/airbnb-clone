<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/ookamyabyss/LP-3-FINAL/main/img/logo.png?token=GHSAT0AAAAAABWFLROESLZI47INA47EWVZYYWCKI6Q">
  <title>HouShop</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <style type="text/css">
    <?php require_once dirname(dirname(__FILE__)) . '\styles\register.php'; ?>
  </style>
  <script>
    var password = document.getElementById("password"),
      confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Senhas Diferentes");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;

    function validacaoEmail(field) {
      usuario = field.value.substring(0, field.value.indexOf("@"));
      dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

      if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        document.getElementById("msgemail").innerHTML = "E-mail válido";
        alert("E-mail valido");
      } else {
        document.getElementById("msgemail").innerHTML = "<font color='red'>E-mail inválido </font>";
        alert("E-mail invalido");
      }
    }
  </script>
</head>

<body>

  <body class="register">
    <div class="register_background">
      <div class="shape"></div>
      <div class="shape"></div>
    </div>

    <div class="register">
      <form action="userRegister" method="POST">
        <h3>Register Here</h3>

        <label for="username">Nome:</label>
        <input type="text" placeholder="Nome" name="nome" required>

        <label for="email">Email: </label>
        <input type="email" placeholder="Email" name="email" onblur="validacaoEmail(f1.email)" maxlength="60" size='65' required>

        <label for="cpf">CPF:</label>
        <input type="text" placeholder="CPF" name="cpf" required>

        <label for="telefone">Telefone:</label>
        <input type="text" placeholder="telefone" name="telefone" required>

        <label for="country">País</label>
        <select color="black" name="pais_id">
          <option value="0" selected>Pais</option>
          <?php foreach ($paises as $pais) { ?>
            <option value="<?php echo $pais->getId(); ?>"><?php echo $pais->getNome(); ?></option>
          <?php }; ?>
        </select>

        <label for="senha">Senha:</label>
        <input type="password" placeholder="Senha" name="senha" required>

        <label for="password">Confirmar Senha:</label>
        <input type="password" placeholder="Confirmar Senha:" required>

        <button>Register</button>
        <div class="social">
          <a href="">
            <div class="go">HOME</div>
          </a>
          <a href="login">
            <div class="fb">LOGIN</div>
          </a>
        </div>

      </form>
    </div>
  </body>

</html>