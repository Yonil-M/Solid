<?php
namespace App;

use MyBank\MyBankApi;

class MyBankPaymentProcessor implements PaymentProcessor{
    protected $myBankApi;
    public function __construct(MyBankApi $myBankApi)
    {
        
    }
    
    
    
    public function pay()
    {
        $this->myBankApi->charge();
    }
}