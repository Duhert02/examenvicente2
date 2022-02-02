<?php
use PHPUnit\Framework\TestCase;

class TestGuerrea extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera();
    }

    public function testHeridaAlive(){
        $this->assertEquals(1,'alive',$this->op->herida(11,'alive'));
    
    }

    public function testHeridaDead(){
        $this->assertEquals(-1,'dead',$this->op->herida(9,'alive'));
             
    }

    public function testPocionViva(){
        $this->assertEquals(-1,'dead',$this->op->pocion(-11,'dead'));
    }

    public function testPocionMuerta(){
        $this->assertEquals(1,'alive',$this->op->pocion(-9,'dead'));
    }

}
