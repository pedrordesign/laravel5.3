<?php
/**
 * Created by PhpStorm.
 * User: sh_ntbk_hp
 * Date: 06/09/16
 * Time: 10:39
 */

namespace CodeEducation\Cart;


class CupomPercentage extends Cupom
{
    /**
     * @return mixed
     */
    public function getTotal($cartTotal)
    {
        return $cartTotal - $cartTotal * $this->total / 100;
    }

}