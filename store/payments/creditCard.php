<?php
session_start();

require_once dirname(__FILE__).'/../classes/customer.php';
require_once dirname(__FILE__).'/../classes/key.php';
//require_once dirname(__FILE__).'/../../lib/conekta.php';

extract($_POST);

$customerInfo = new CustomerInfo($fullName, $street, $borough, $city, $state, $zipCode, $country, $paymentMethod);
echo json_encode(get_object_vars($customerInfo));
echo ConektaPublicKey::publicKey();
?>
<html>
<head>
</head>
<body>
  <form action="" method="post" id="card-form">
    <input type="text" id="input"/>
    <button type="submit">sbmut</button>
  </from>
<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.5.0/js/conekta.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
//var cnk = Conekta.setPublicKey('<?php echo ConektaPublicKey::publicKey(); ?>');
var obj = JSON.parse('<?php echo json_encode(get_object_vars($customerInfo))?>');
console.log(obj);
// tokenize
$(function () {
  $("#card-form").submit(function(event) {
    var $form = $(this);
    $form.find("button").prop("disabled", true);
    //Conekta.Token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler); //v5+
    console.log($form.serialize());
    return false;
  });
});
</script>

</body>
</html>
