<?php

class CreditCard implements PaymentMethodInterface {

    public function processPayment() {

        echo 'process payment CreditCard';
    }
}