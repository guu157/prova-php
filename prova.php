<?php
class Carro 
{
   public $cor;
   public $marca;
   public $placa; 
   public $ano;
   public $modelo;

}
   public function montagem(){
       return "carro de cor {$this-> cor} da marca {$this -> marca} placa {$this->placa} ano {$this-> ano} modelo {$this -> modelo}
   }


    $carro1 = new Carro();

    $carro1 -> cor = ""vermelho";
    $carro1 -> $marca = "fiat";
    $carro1 -> $placa = "adf1454";
    $carro1 -> $ano = "2014";
    $carro1 -> $modelo = "sedã";



    echo $carro1;




 
 





