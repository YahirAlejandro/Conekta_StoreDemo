<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Yahir Hernández Cano">
		<meta name="description" content="Conekta API test">
		<title>Conekta</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
		<link rel="stylesheet" href="/../css/milligram/dist/milligram.min.css">
	</head>
	<body>

	<main class="wrapper">
	    <section class="container">
	      <img class="img" src="https://s3.amazonaws.com/conekta.static/business/_layout/conekta_logo.svg" height="30">
	    </section>
			<section>
<!-- Main start -->
        <form action="customer_info.php" method="POST">
          <fieldset>
            <div class="container">
              <div class="row">
								<div class="column">

                	<label>
                  	<h2>Terrible Japanese Fork Alternative</h2>
                  	<img class="img" src="http://matomeno.in/common/img/item/2338_1.jpg" width="95%">
                	</label>

								</div>
								<div class="colum">
									<p><em><hr>
										This item is blah blah...<br>
										also blah blasjkala...
									</em></p>
									<h3><b>Purchase this item via:</b></h3>
									<select name="paymentMethod">
										<option value="creditCard">Tarjeta de crédito</option>
										<option value="cashPayment">Depósito</option>
										<option value="SPEIPayment">SPEI</option>
										<option value="banortePayment">Banorte</option>
									</select>
									<input type="hidden" name="price" value="<?php echo $price = rand(100, 999); ?>"/>
									<h1><b>Total: </b>$<?php echo $price; ?> MXN</h1>
									<input class="button-primary" type="submit" value="Pagar!">
								</div>
								<div class="column">
              </div>
            </div>

          </fieldset>
        </form>
			</section>
		</main>
		<script src="https://milligram.github.io/js/script.js"></script>
	</body>
</html>
<?php
session_unset();
session_destroy();
?>
