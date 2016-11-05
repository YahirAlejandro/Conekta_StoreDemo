<?php
session_start();

require_once dirname(__FILE__).'/../classes/customer.php';
require_once dirname(__FILE__).'/../classes/key.php';
require_once dirname(__FILE__).'/../../lib/conekta.php';

extract($_POST);

$customerInfo = new CustomerInfo($fullName, $street, $borough, $city, $state, $zipCode, $country, $paymentMethod);
?>
<html>
<head>
</head>
<body>
<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.5.0/js/conekta.js"></script>
<script type="text/javascript">
Conekta.setPublicKey('<?php echo ConektaPublicKey::conektaPublicKey ?>');
</script>

</body>
</html>
