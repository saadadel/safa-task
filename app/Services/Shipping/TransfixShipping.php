<?php

namespace App\Services\Shipping;

use App\Models\Order;
use App\Models\Product;


class TransfixShipping implements Shipper
{
    private $cities;
    private $config;

    public function __construct() {
        $this->config = app('shipping.transfix');
    }

    public function sendShipmentRequest($products, $address)
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