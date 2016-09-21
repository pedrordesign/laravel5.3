<?php
/**
 * Created by PhpStorm.
 * User: sh_ntbk_hp
 * Date: 02/09/16
 * Time: 16:22
 */

namespace CodeEducation\Cart;


class Cart
{
    private $total;
    private $items = [];

    public function addProduct(Product $product)
    {
        $newItem = [
            'name' => $product->getName(),
            'price' => $product->getPrice()
        ];

        array_push($this->items, $newItem);

        $this->total += $product->getPrice();
    }

    public function applyCupom(Cupom $cupom)
    {
            $this->total = $cupom->getTotal($this->total    );
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getItems()
    {
        return $this->items;
    }
}