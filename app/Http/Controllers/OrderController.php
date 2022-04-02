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
                'orders' => Order::orderBy('date_add', 'desc')
                    ->limit(30)
                    ->get()
                    ->map(fn($order) => $order->fullInfo)
            ]
        );
    }
}
