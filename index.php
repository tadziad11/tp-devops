<?php

namespace MyNamespace;
class Exception extends \Exception {}

echo "test";

class MathOperations
{
    
    public function add($a, $b)
    {
        return $a + $b;
    }
    
    public function subtract($a, $b)
    {
        return $a - $b;
    }
    
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new Exception('Division by zero');
        }
        return $a / $b;
    }
}
