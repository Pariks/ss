<?php


namespace app\Billing;


interface BillingInterface
{

    public function charge(array $data);


}