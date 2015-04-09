<?php
/**
 * Created by PhpStorm.
 * User: Albertas
 * Date: 2015.04.09
 * Time: 00:57
 */

class Multiplier {
    private $variable;

    function __construct($variable)
    {
        $this->variable = $variable;
    }

    public function multiply(){
        return ($this->variable*$this->variable);
    }
} 