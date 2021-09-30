<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class Cart
{
    private $items = [];
    // private $totalPrice = 0;
    // private $totalQuantity = 0;

    public function __construct()
    {
        // session()->forget('cart.items');
        // session()->forget('cart');
        $this->items = session('cart.items') ? session('cart.items') : [];
    }

    public function add($product, $quantity = 1)
    {
        $item = [
            'product_id' => $product->id,
            'price' => $product->sale_price ? $product->sale_price : $product->price,
            'name' => $product->name,
            'quantity' => $quantity,
            'image' => $product->image
        ];

        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += $quantity;
        } else {
            $this->items[$product->id] = $item;
        }
        $this->updateCart();
    }

    public function update($product_id, $quantity)
    {
        $this->items[$product_id]['quantity'] = $quantity;
        $this->updateCart();
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item['quantity'] * $item['price'];
        }
        return $totalPrice;
    }

    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity += $item['quantity'];
        }
        return $totalQuantity;
    }


    public function getItems()
    {
        return $this->items;
    }

    public function removeItem($product_id)
    {
        unset($this->items[$product_id]);
        $this->updateCart();
    }

    public function removeAll()
    {
        $this->items = [];
        $this->updateCart();
    }

    public function updateCart()
    {
        session(['cart.items' => $this->items]);
        session(['cart.totalPrice' => $this->getTotalPrice()]);
        session(['cart.totalQuantity' => $this->getTotalQuantity()]);
    }
}
