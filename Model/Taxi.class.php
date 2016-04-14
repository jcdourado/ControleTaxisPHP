<?php
  class Taxi{
    private $id;
    private $nome;
    private $placa;
    private $bairro;
    private $cidade;
    private $estado;

    public function __get($prop){
      return $this->$prop;
    }

    public function __set($prop,$value){
      $this->$prop = $value;
    }
  }



 ?>
