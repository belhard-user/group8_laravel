<?php

namespace App\Http\Controllers;

use Cart;
use App\Mods;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Mods $product)
    {
        Cart::add(array(
            'id' => $product->id,
            'name' => $product->car_name,
            'price' => 59,
            'quantity' => 1,
            'attributes' => $product->toArray()
        ));

        flash('success', 'Товар ' . $product->car_name . ' добавлен в корзину');

        return redirect()->back();
    }

    public function viewCart()
    {
        return Cart::getContent();
    }
}
