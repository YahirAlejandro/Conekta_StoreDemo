<?php
# Basic customer information
class CustomerInfo {
  public $fullName;
  public $street;
  public $borough; // Bad "colonia" translation
  public $city;
  public $state;
  public $zipCode;
  public $country;
  public $paymentMethod;

  function __construct($fullName, $street, $borough, $city, $state, $zipCode, $country ,$paymentMethod) {
    $this->fullName = $fullName;
    $this->street = $street;
    $this->borough = $borough;
    $this->city = $city;
    $this->state = $state;
    $this->zipCode = $zipCode;
    $this->country = $country;
    $this->paymentMethod = $paymentMethod;
  }
}
