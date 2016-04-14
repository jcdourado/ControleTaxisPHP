<?php

  include '../DAO/TaxiDAO.class.php';

  class TaxiController{

    private $dao;

    public function __construct(){
      $this->dao = new TaxiDAO;
    }


    public function adicionar(Taxi $taxi){
      return ($this->dao->adicionar($taxi));
    }

    public function consultar($nome){
      return ($this->dao->consultar($nome));
    }
  }
 ?>
