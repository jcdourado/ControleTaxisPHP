<?php
  include 'ResourceManager.class.php';

  include '../Model/Taxi.class.php';

  class TaxiDAO{
    private $conexao;

    public function __construct(){
      $this->conexao = ResourceManager::getResource()->getConnection();
    }

    public function adicionar(Taxi $taxi){
      $sql = "INSERT INTO TAXIS(NOME, PLACA, BAIRRO, CIDADE, ESTADO) VALUES (?, ?, ?, ?, ?)";
      $statement = $this->conexao->prepare($sql);
      $statement->bindParam(1, $taxi->nome);
      $statement->bindParam(2, $taxi->placa);
      $statement->bindParam(3, $taxi->bairro);
      $statement->bindParam(4, $taxi->cidade);
      $statement->bindParam(5, $taxi->estado);
      return ($statement->execute());
    }

    public function consultar($nome){
      $sql = "SELECT * FROM TAXIS WHERE NOME LIKE '%".$nome."%'";
      $statement = $this->conexao->prepare($sql);
      $taxis = array();
      $statement->execute();
      while($taxi = $statement->fetch(PDO::FETCH_ASSOC)){
        $taxis[] = $taxi;
      }
      return $taxis;
    }

    public function alterar(Taxi $taxi){
      $sql = "UPDATE TAXIS SET NOME = ?, PLACA = ?, BAIRRO = ?, CIDADE = ?, ESTADO = ? WHERE ID = ?";
      $statement = $this->conexao->prepare($sql);
      $statement->bindParam(1, $taxi->nome);
      $statement->bindParam(2, $taxi->placa);
      $statement->bindParam(3, $taxi->bairro);
      $statement->bindParam(4, $taxi->cidade);
      $statement->bindParam(5, $taxi->estado);
      $statement->bindParam(6, $taxi->id);
      return ($statement->execute());
    }

    public function excluir($id){
      $sql = "DELETE FROM TAXIS WHERE ID = ?";
      $statement = $this->conexao->prepare($sql);
      $statement->bindParam(1, $id);
      return ($statement->execute());
    }
  }

?>
