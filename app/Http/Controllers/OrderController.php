<?php

namespace App\Http\Controllers;

use App\Services\Shipping\ShippingManager;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        // 1-validate the selected shipping provider is supported by the store (if not choosed custom shipping)
        // 2-validate the selected city is supported by the store for the selected provider (if not choosed custom shipping)

        $shipping_provider = new ShippingManager($request->shipping_provider);

        $shipping_provider->calculateFees($request->products, $request->address);

        $shipping_provider->sendShipmentRequest($request->products, $request->address);

        return response('success');
    }

}

