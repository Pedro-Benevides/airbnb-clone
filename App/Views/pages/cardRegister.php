<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
  <link rel="shortcut icon" href="../img/logo.png">
  <title>House Shop</title>

  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Open+Sans&amp;display=swap'>
  <style type="text/css">
    <?php require dirname(dirname(__FILE__)) . '\styles\form.php'; ?>
  </style>
</head>

<div class="checkout">
  <div class="credit-card-box">
    <div class="flip">
      <div class="front">
        <div class="chip"></div>

        <div class="number"></div>
        <div class="card-holder">
          <label>Titular</label>
          <div></div>
        </div>
        <div class="card-expiration-date">
          <label>Validade</label>
          <div></div>
        </div>
      </div>
      <div class="back">
        <div class="strip"></div>
        <div class="ccv">
          <label>CCV</label>
          <div></div>
        </div>
      </div>
    </div>
  </div>
  <form class="form" autocomplete="off" novalidate action="cardRegister" method="post">
    <input type="hidden" name="dataInicio" value="<?php echo $_POST['dataInicio']; ?>">
    <input type="hidden" name="dataFim" value="<?php echo $_POST['dataFim']; ?>">
    <input type="hidden" name="accommodation" value="<?php echo $_POST['accommodation']; ?>">
    <fieldset>
      <label for="card-number1">Numero</label>
      <input required type="num" name="cardNumber1" class="input-cart-number" maxlength="4" />
      <input required type="num" name="cardNumber2" class="input-cart-number" maxlength="4" />
      <input required type="num" name="cardNumber3" class="input-cart-number" maxlength="4" />
      <input required type="num" name="cardNumber4" class="input-cart-number" maxlength="4" />
    </fieldset>
    <fieldset>
      <label for="titular">Titular</label>
      <input type="text" name="titular" />
    </fieldset>
    <fieldset class="fieldset-expiration">
      <label for="card-expiration-month">Validade</label>
      <div class="select">
        <select required id="card-expiration-month" name="expirationMonth">
          <?php foreach ($expirationMonths as $month) { ?>
            <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
          <?php }; ?>
        </select>
      </div>
      <div class="select">
        <select required name="expirationYear" id="card-expiration-year">
          <?php foreach ($expirationYears as $year) { ?>
            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
          <?php }; ?>
        </select>
      </div>
    </fieldset>
    <fieldset class="fieldset-ccv">
      <label for="ccv">CCV</label>
      <input required type="text" id="ccv" name="cvv" maxlength="3" />
    </fieldset>
    <button class="btn" type="submit">Submit</button>
  </form>
</div>
</main>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
  $('.input-cart-number').on('keyup change', function() {
    $t = $(this);

    if ($t.val().length > 3) {
      $t.next().focus();
    }

    var card_number = '';
    $('.input-cart-number').each(function() {
      card_number += $(this).val() + ' ';
      if ($(this).val().length == 4) {
        $(this).next().focus();
      }
    })

    $('.credit-card-box .number').html(card_number);
  });

  $('#card-holder').on('keyup change', function() {
    $t = $(this);
    $('.credit-card-box .card-holder div').html($t.val());
  });

  $('#card-holder').on('keyup change', function() {
    $t = $(this);
    $('.credit-card-box .card-holder div').html($t.val());
  });

  $('#card-expiration-month, #card-expiration-year').change(function() {
    m = $('#card-expiration-month option').val();
    y = $('#card-expiration-year').val().substr(2, 2);
    $('.card-expiration-date div').html(m + '/' + y);
  })

  $('#card-ccv').on('focus', function() {
    $('.credit-card-box').addClass('hover');
  }).on('blur', function() {
    $('.credit-card-box').removeClass('hover');
  }).on('keyup change', function() {
    $('.ccv div').html($(this).val());
  });


  /*--------------------
  CodePen Tile Preview
  --------------------*/
  setTimeout(function() {
    $('#ccv').focus().delay(1000).queue(function() {
      $(this).blur().dequeue();
    });
  }, 500);
</script>

</html>