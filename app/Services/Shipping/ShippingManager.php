<?php

namespace App\Services\Shipping;

use Exception;

class ShippingManager
{
    public function __construct($shipper_name) {
        $class_fullname = ucfirst($shipper_name).'Shipping';
        if(class_exists( $class_fullname ))
        {
            return new $class_fullname;
        }
        else
        {
            throw new Exception('The selected shipping provider is not supported');
        }
    }
}