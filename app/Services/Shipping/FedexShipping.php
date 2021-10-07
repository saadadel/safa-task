<?php

namespace App\Services\Shipping;

use App\Models\Order;
use App\Models\Product;


class FedexShipping implements Shipper
{
    private $cities;
    private $config;

    public function __construct() {
        $this->config = app('shipping.fedex');
    }

    public function sendShipmentRequest($product, $address)
    {
        
    }

    public function changeOrderStatus(Order $order)
    {
        
    }

    public function calculateFees($products, $address)
    {

    }

    public function getCities()
    {

    }
}