<?php
session_start();
extract($_POST);
$_SESSION["paymentMethod"] = $paymentMethod;
$_SESSION["price"] = $price;
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
    <div class="float-right"><b>Total: </b>$<?php echo $_SESSION["price"] ?> MXN</div>
  </section>
	<section>
        <!-- Main start -->
      <form action="payments/<?php echo $paymentMethod ?>.php" method="POST">
        <fieldset>
          <div class="container">
            <div class="row">
							<div class="column">

              	<label>
                	<h2>Customer Information</h2>
              	</label>

							</div>
          </div>
          <div class="row">
            <div class="column column-50">
              Nombre del cliente:
              <input type="text" size="20" name="fullName"/>
              Colonia:
              <input type="text" size="20" name="borough"/>
              Estado:
              <input type="text" size="20" name="state"/>
              Pais:
              <input type="text" size="20" name="country"/>
            </div>
            <div class="colum column-50 colum-offset-50">
              Calle:
              <input type="text" size="20" name="street"/>
              Ciudad:
              <input type="text" size="20" name="city"/>
              Código postal:
              <input type="text" size="20" name="zipCode"/>
              Método de pago:
              <input type="text" size="20" value="<?php echo $paymentMethod ?>" readonly/>
            </div>
          </div>
          <div class="row">
            <div class="float-right">
              <input class="button-primary" type="submit" value="Siguiente">
            </div>
          </div>
        </fieldset>
      </form>
		</section>
	</main>
	<script src="https://milligram.github.io/js/script.js"></script>
</body>
</html>
