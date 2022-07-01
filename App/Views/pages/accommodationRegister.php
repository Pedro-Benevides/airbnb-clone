<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
  <link rel="shortcut icon" href="../img/logo.png">
  <title>House Shop</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!-- Link Css -->
  <style type="text/css">
    <?php require dirname(dirname(__FILE__)) . '\styles\accommodationRegister.php'; ?>
  </style>

</head>

<body>
  <form action="accommodationRegister" method="POST" enctype="multipart/form-data">

    <h3>Accomodation Register</h3>

    <div class="top-row">
      <div class="field-wrap">
        <label for="Cidade">Cidade: </label>
        <select class="" name="cidade_id">
          <option value="0" selected>Cidade</option>
          <?php foreach ($cidades as $cidade) { ?>
            <option value="<?php echo $cidade->getId(); ?>"><?php echo $cidade->getNome(); ?></option>
          <?php }; ?>
        </select>
      </div>

      <div class="field-wrap">
        <label for="Cep">Cep: </label>
        <input type="text" placeholder="Cep" name="cep" required>
      </div>
    </div>

    <div class="top-row">
      <div class="field-wrap">
        <label for="Rua">Rua: </label>
        <input type="text" placeholder="Rua" name="rua" required>
      </div>

      <div class="field-wrap">
        <label for="Numero">Numero: </label>
        <input type="text" placeholder="Numero" name="numero" required>
      </div>

      <div class="field-wrap">
        <label for="Complemento">Complemento: </label>
        <input type="text" placeholder="Complemento" name="complemento">
      </div>

    </div>

    <div class="top-row">
      <div class="field-wrap">
        <label for="Categoria">Categoria: </label>
        <select class="" name="tipo_acomodacao_id" id="tipo_acomodacao_id" required>
          <option value="0" selected>Categoria</option>
          <?php foreach ($tipos as $tipo) { ?>
            <option value="<?php echo $tipo->getId(); ?>"><?php echo $tipo->getDescricao(); ?></option>
          <?php }; ?>
        </select>
      </div>

      <div class="field-wrap">
        <label for="Diaria">Diaria: </label>
        <input type="numer" placeholder="Diaria" name="diaria" required>
      </div>
    </div>

    <div class="top-row">

      <div class="field-wrap">
        <label for="Descrição">Descrição: </label>
        <input type="text" placeholder="Descrição" name="descricao">
      </div>

      <div class="field-wrap">
        <label for="Capacidade">Capacidade: </label>
        <input type="numer" placeholder="Capacidade" name="capacidade" required>
      </div>
    </div>

    <div class="top-row">
      <div class="field-wrap">
        <label for="Imagem">Imagem Interior: </label>
        <input type="file" placeholder="Imagem Interior" name="imagem_interior">
      </div>

      <!-- <div class="field-wrap">
        <label for="Imagem Frontal">Imagem Frontal: </label>
        <input type="file" placeholder="Imagem Frontal" name="imagem_frontal">
      </div>

      <div class="field-wrap">
        <label for="Imagem Adicional">Imagem Adicional: </label>
        <input type="file" placeholder="Imagem Adicional" name="imagem_adicional">
      </div> -->
    </div>

    <button type="submit" class="button button-block">Register</button>

  </form>
</body>

</html>