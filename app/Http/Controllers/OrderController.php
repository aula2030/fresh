<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index()
    {
        return Inertia::render(
            'Dashboard',
            [
                'orders' => Order::with('address.country_lang', 'order_details', 'state')
                    ->orderBy('date_add', 'desc')
                    ->limit(30)
                    ->get()
                    ->map(fn($order) => [
                        'reference' => $order->reference,
                        'date'      => $order->date_add->toDateTimeString(),
                        'customer'  => $order->address->fullCustomerName,
                        'address'   => $order->address->fullAddress,
                        'country'   => $order->address->country_lang->name,
                        'products'  => $order->order_details->pluck('product_name'),
                        'state'     => $order->state->name
                    ])
            ]
        );
    }
}
