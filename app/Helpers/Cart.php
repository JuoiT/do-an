<?php

namespace App\Helpers;

class Cart
{
    private $items = [];
    private $totalPrice = 0;
    private $totalQuantity = 0;

    public function __construct()
    {
        $this->items = session('cart')?session('cart'):[];
    }

    public function add($product, $quantity)
    {
        $item = [
            'product_id' => $product->id, 
            'price' => $product->sale_price?$product->sale_price:$product->price,
            'name' => $product->name,
            'quantity' => $quantity, 
            'image' => $product->image
        ];

        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += $quantity;
        } else {
            $this->items[$product->id] = $item;
        }

        session(['cart'=>$this->items]);
    }
}
