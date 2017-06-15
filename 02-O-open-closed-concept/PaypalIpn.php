<?php

require 'PaymentMethodInterface.php';

class PaypalIpn implements PaymentMethodInterface {

    public function processPayment() {

        echo 'process payment PaypalIpn';

    }
}