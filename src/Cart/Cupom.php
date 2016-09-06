<?php
/**
 * Created by PhpStorm.
 * User: sh_ntbk_hp
 * Date: 06/09/16
 * Time: 10:39
 */

namespace CodeEducation\Cart;


class Cupom
{

    protected $total;
    protected $code;

    /**
     * @return mixed
     */
    public function getTotal($cartTotal)
    {
        return $cartTotal - $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }


}