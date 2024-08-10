<?php

namespace App\Models;

class Cart
{
    public $items = [];
    public $totalPrice = 0;


    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
        $this->totalPrice = $this->getTotalPrice();
    }


    public function list_cart()
    {
        return $this->items;
    }

    public function add($product, $quantity = 1)
    {

        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += 1;
        } else {
            $item = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => $quantity
            ];
            $this->items[$product->id] = $item;
        }



        session(['cart' => $this->items]);
    }


    public function update($quantity)
    {
        $cart_items = $this->items;

        if ($cart_items) {
            foreach ($cart_items as $session => $item) {
                if (isset($quantity[$item['id']])) {
                    $cart_items[$session]['quantity'] = $quantity[$item['id']];
                }
            }

            session(['cart' => $cart_items]);
        }
    }

    public function delete($id)
    {

        if (isset($this->items[$id])) {
            unset($this->items[$id]);
            session(['cart' => $this->items]);
        }
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }
}
