<?php
require 'src/index.php';
use PHPUnit\Framework\TestCase;

class IntegracionTest extends TestCase{
    
    public function testDarVuelta(){
        $this->assertEquals(darVuelta("hOlA"), "AlOh");
    }
    public function testMayusc(){
        $this->assertEquals(mayusc("hOlA"), "HOLA");
    }
    public function testMinusc(){
        $this->assertEquals(minusc("hOlA"), "hola");
    }
    public function testContLetras(){
        $this->assertEquals(contLetras("hOlA"), 4);
    }
}