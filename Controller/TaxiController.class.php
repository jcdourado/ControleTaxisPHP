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

    public function excluir($id){
      return ($this->dao->excluir($id));
    }

    public function duplicar($id){
      $this->dao->duplicar($id);
    }

    public function buscarRegistro($id){
      return $this->dao->buscarRegistro($id);
    }

    public function editar($taxi,$id){
      print_r($taxi);
      $this->dao->editar($taxi,$id);
    }
  }

  if(isset($_GET['excluir'])){
    $controller = new TaxiController;
    $controller->excluir($_GET['excluir']);
    header('Location: ../View/TaxisView.php');
    die();
  }

  if(isset($_GET['duplicar'])){
    $controller = new TaxiController;
    $controller->duplicar($_GET['duplicar']);
    header('Location: ../View/TaxisView.php');
    die();
  }

 ?>
