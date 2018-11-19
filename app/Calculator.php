<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    public $number1;
    public $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function addition()
    {
        return $this->number1 + $this->number2;
    }

    public function subtraction()
    {
        return $this->number1 - $this->number2;
    }

    public function division()
    {
        if ($this->number2 == 0) {
            return 'Division not by 0';
        } else {
            return $this->number1 / $this->number2;
        }
    }

    public function multiplication()
    {
        return $this->number1 * $this->number2;
    }
}

