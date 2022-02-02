<?php
use PHPUnit\Framework\TestCase;

class TestGuerrea extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera("Astrid", 30 ,"alive");
    }

    public function testheridaAlive(){
        $this->assertEquals("alive",$this->op->herida(20,'alive'));
     
    }
    
    public function testPocionMuerta(){
        $this->assertEquals("alive",$this->op->pocion(-9,'dead'));
     
    }

}
