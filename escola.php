<?php

class Escola{
   public $turma;
   public $endereco;
   public $numero;
   public $alunos;
   public $salas;

}

  public function escola(){
        return "Nome {$this -> nome}, endereço {$this -> endereco}, contato {$this -> numero}, Alunos: {$this -> alunos}, Salas disponiveis {$this ->salas} "

  }

  $escola1 = new Escola();

  $escola1 -> $turma = "25";
  $escola1 ->  $endereco = "Rua holanda numero 59"
  $escola1 ->  $numero = 40034457;
  $escola1 -> $alunos = 900;
  $escola1 -> $salas = 15;

  echo $escola1;
