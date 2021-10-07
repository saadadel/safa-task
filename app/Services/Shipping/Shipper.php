<?php

namespace App\Services\Shipping;

use App\Models\Order;
use App\Models\Product;

interface Shipper
{
    public function sendShipmentRequest($products, $address);

    public function changeOrderStatus(Order $order);

    public function calculateFees($products, $address);

    public function getCities();
}