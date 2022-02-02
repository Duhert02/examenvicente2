<?php
use PHPUnit\Framework\TestCase;

class TestGuerrea extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera("Astrid", 30 ,"alive");
    }

    public function testHeridaAlive(){
        $this->assertEquals("alive",$this->herida(10,'alive'));

    }

    public function testHeridaDead(){
        $this->assertEquals("dead",$this->op->herida(9,'alive'));
      
    }

    public function testPocionViva(){
        $this->assertEquals("dead",$this->op->pocion(-11,'dead'));
    
    }

    public function testPocionMuerta(){
        $this->assertEquals("alive",$this->op->pocion(-9,'dead'));
     
    }

}
