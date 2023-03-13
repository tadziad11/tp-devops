<?php

require_once('index.php');
namespace MyNamespace\Tests;
require_once('vendor/autoload.php');
use PHPUnit\Framework\TestCase;
use MyNamespace\MathOperations;

class TestMathOperations extends TestCase {
    
    public function testAdd() {
        $math = new MathOperations();
        $this->assertEquals(4, $math->add(2, 2));
        $this->assertEquals(-1, $math->add(2, -3));
    }
    
    public function testSubtract() {
        $math = new MathOperations();
        $this->assertEquals(0, $math->subtract(2, 2));
        $this->assertEquals(5, $math->subtract(2, -3));
    }
    
    public function testMultiply() {
        $math = new MathOperations();
        $this->assertEquals(6, $math->multiply(2, 3));
        $this->assertEquals(-6, $math->multiply(2, -3));
    }
    
    public function testDivide() {
        $math = new MathOperations();
        $this->assertEquals(2, $math->divide(6, 3));
        $this->assertEquals(-2, $math->divide(6, -3));
        $this->expectException(Exception::class);
        $math->divide(6, 0);
    }
    
}

?>
