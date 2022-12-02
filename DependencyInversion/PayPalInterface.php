<?php
namespace App;

use PayPal\PayPalApi;

class PayPalPaymentProcessor implements PaymentProcessor {
protected $payPalApi;
public function __construct(PayPalApi $payPalApi)
{
    $this->payPalApi=$payPalApi;
}

public function pay(){
    $this->payPalApi->chargeCustomer();
}
}