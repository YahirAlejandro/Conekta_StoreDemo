<?php
# Card payment information
class CardPaymentInfo extends CustomerInfo {
  /* For the sake of consistency, I'm splitting expiration numbers into month and year
  but, just to give balance to the universe, I'm not using the ConektaJS nomenclature for my vars.
  (trying to follow) PSR-2 coding standard */
  public $cardNumber;
  public $cardCVC;
  public $cardExpMonth;
  public $cardExpYear;

  function __construct($cardNumber, $cardCVC, $cardExpMonth, $cardExpYear) {
    $this->cardNumber = $cardNumber;
    $this->cardCVC = $cardCVC;
    $this->cardExpMonth = $cardExpMonth;
    $this->cardExpYear = $cardExpYear;
  }
}

class CashPaymentInfo extends CustomerInfo {
  public $chargeType = "cash";
  public $chargeSubType;
  public $expirationDate;

  function __construct($chargeSubType, $expirationDate) {
    $this->chargeSubType = $chargeSubType;
    $this->expirationDate = $expirationDate;
  }
}

class SPEIPaymentInfo extends CustomerInfo {
  public $chargeType = "bank";
  public $chargeSubType = "spei";
}

class BanortePaymentInfo extends CustomerInfo {
  public $chargeType = "bank";
  public $chargeSubType = "banorte";
  public $expirationDate;

  function __construct($expirationDate) {
    $this->expirationDate = $expirationDate;
  }
}

require_once dirname(__FILE__).'/customer.php';
