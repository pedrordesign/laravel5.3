<?php
/**
 * Created by PhpStorm.
 * User: sh_ntbk_hp
 * Date: 05/09/16
 * Time: 16:56
 */

namespace CodeEducation\Cart\Tests;

use CodeEducation\Cart\Cart;
use CodeEducation\Cart\Cupom;
use CodeEducation\Cart\CupomPercentage;
use CodeEducation\Cart\ProductX;

class CartTest extends \PHPUnit_Framework_TestCase
{

    public function test_check_cart_total_when_add_a_product()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');

        $cart = new Cart();

        $cart->addProduct($productX);
        $this->assertEquals(15, $cart->getTotal());

        $cart->addProduct($productX);
        $this->assertEquals(30, $cart->getTotal());
    }

    public function test_if_cart_items_are_beign_returnet()
    {

        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');


        $cart = new Cart();
        $cart->addProduct($productX);

        $items = $cart->getItems();

        $itemsExpected = [
            0 => [
                'name' => 'Product X',
                'price' => 15
            ]
        ];


        $this->assertEquals($itemsExpected, $items);

    }

    public function test_apply_cupom_with_type_percentage_and_check_if_its_returning_the_correct_total()
    {
        $productX = $this->getMockBuilder(ProductX::class)->getMock();
        $productX->method('getPrice')->willReturn(15);
        $productX->method('getName')->willReturn('Product X');

        $cupom = $this->getMockBuilder(CupomPercentage::class)->getMock();
        $cupom->method('getTotal')->willReturn(13.5);


        $cart = new Cart();
        $cart->addProduct($productX);
        $cart->applyCupom($cupom);
        $total = $cart->getTotal();

        $this->assertEquals(13.5, $total);

    }

}