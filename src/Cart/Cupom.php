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
    protected $type;

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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Cupom
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }



}