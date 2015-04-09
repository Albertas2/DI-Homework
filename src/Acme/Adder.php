<?php
/**
 * Created by PhpStorm.
 * User: Albertas
 * Date: 2015.04.09
 * Time: 01:07
 */

namespace Acme\DemoBundle;


class Adder {
    private $variable;

    public function setVariable(\Multiplier $variable)
    {
        $this->variable = $variable;
    }


    public function add(){
        return ($this->variable+$this->variable);
    }

} 