<?php
class Guerrera
{
    public $nombre; #Nombre de la guerrera
    public $vida; #Valor de la vida que posee
    public $estado; #La guerrera estará 'viva' o 'muerta', dependiendo del valor de su vida. >0 = viva; <=0 = muerta

    public function __construct(){}


    public function herida($vida,$estado){
        $vida-=10;
        if ($vida <= 0) {
            $estado =='dead';
        }
        return $this->estado
        return $this->vida
    }

    public function pocion($vida,$estado){
        $vida+=10;
        if ($vida > 0 && $estado == 'dead'){
            $estado = 'alive';
        }
        return $this->estado
        return $this->vida
    }
}
