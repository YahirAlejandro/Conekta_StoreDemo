<?php
session_start();
if (isset($_SESSION['price'])) {
	session_unset();
	session_destroy();
}
require_once dirname(__FILE__).'/classes/forms.php';
FormFields::mainWrapper();
unset($paymentMethod);
echo $price = rand(100,999);
?>
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
									<input type="hidden" name="price" value="<?php echo $price; ?>"/>
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
