<?php
session_start();

require_once dirname(__FILE__).'/../classes/customer.php';

extract($_POST);

$customerInfo = new CustomerInfo($fullName, $street, $borough, $city, $state, $zipCode, $country, $paymentMethod);

var_dump($customerInfo);
