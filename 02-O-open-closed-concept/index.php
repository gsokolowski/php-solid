<?php

// SOLLID
// Open/Closed Principal

// You should be able to extend classes behavior without modifying it
// And Classes should be open for extension but closed for modification

// use dependency injection and Interface

require 'PaypalIpn.php';
require 'CreditCard.php';
require 'PaymentManager.php';


$paypalIpn = new PaypalIpn();
$creditCard = new CreditCard();

// like that you narrow yourself to only one payment method
// you need to add PaymentMethodInterface

// so here you are wxtending PaymentManager class buy injecting Interface to constructor
// $creditCard is an object out of interface
$paymentManager = new PaymentManager($creditCard);
//$paymentManager = new PaymentManager($paypalIpn);

$paymentManager->process();


