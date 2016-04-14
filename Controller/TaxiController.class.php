<?php

  include '../DAO/TaxiDAO.class.php';

  class TaxiController{


    public function adicionar(Taxi $taxi){
      $dao = new TaxiDAO;

      return ($dao->adicionar($taxi));
    }
  }



 ?>
