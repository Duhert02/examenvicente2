<?php
use PHPUnit\Framework\TestCase;

class TestGuerrea extends TestCase{

    private $op;

    public function setUp():void{
        $this->op = new Guerrera();
    }

    public function testHeridaAlive(){
        $this->assertEquals('alive',$this->op->herida(11,'alive'));
        return $this->estado;
    }

    public function testHeridaDead(){
        $this->assertEquals('dead',$this->op->herida(9,'alive'));
       return $this->estado;
    }

    public function testPocionViva(){
        $this->assertEquals('dead',$this->op->pocion(-11,'dead'));
       return $this->estado;
    }

    public function testPocionMuerta(){
        $this->assertEquals('alive',$this->op->pocion(-9,'dead'));
        return $this->estado;
    }

}
