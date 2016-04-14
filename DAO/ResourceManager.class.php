<?php
  class ResourceManager{
    private static $server = 'localhost';
    private static $user = 'taxi';
    private static $senha = 'taxitaxi';
    private static $banco = 'taxis';
    private $conexao;
    private static $resource;

    private function ResourceManager(){
      $this->conexao = new PDO("mysql:host=".self::$server .";dbname=".self::$banco, self::$user, self::$senha);
    }

    public function getConnection(){
      return $this->conexao;
    }

    public static function getResource(){
      if(!isset(self::$resource)){
        self::$resource = new ResourceManager;
      }
      return self::$resource;
    }
  }

 ?>
