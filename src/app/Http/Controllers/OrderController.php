<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function route(string $slug): View
    {
        $product = Product::query()
            ->where('slug','=', $slug)
            ->first();

        return view('order', ['product' => $product]);
    }

    public function makeOrder(Request $request)
    {
        $data = $request->request->all();
        $slug = $data['product_slug'];
        $product = Product::query()
            ->where('slug','=', $slug)
            ->first();

        $order = Order::create($data);
        $order['product_id'] = $product->id;
        $order->save();

        return view('payment', ['order' => $order, 'product' => $product]);
    }
}
