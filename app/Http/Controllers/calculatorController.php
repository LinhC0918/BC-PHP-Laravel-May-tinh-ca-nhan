<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Calculator;

class calculatorController extends Controller
{
    private $calculator;
    private $number1;
    private $number2;
    private $operator;

    public function __construct(Request $request)
    {
        $this->number1 = $request->number1;
        $this->number2 = $request->number2;
        $this->operator = $request->operator;
        $this->calculator = new Calculator($this->number1, $this->number2);
    }

    public function add()
    {
        $result = $this->calculator->addition();
        return view('result', compact('result'));
    }

    public function sub()
    {
        $result = $this->calculator->subtraction();
        return view('result', ['result'=> $result]);
    }

    public function mul()
    {
        $result = $this->calculator->multiplication();
        return view('result', ['result'=> $result]);
    }

    public function div()
    {
        $result = $this->calculator->division();
        return view('result', ['result'=> $result]);
    }

    public function calculate()
    {
        switch ($this->operator) {
            case '+':
                return $this->add();
                break;
            case '-':
                return $this->sub();
                break;
            case '*':
                return $this->mul();
                break;
            default:
                return $this->div();
                break;
        }
    }
}
