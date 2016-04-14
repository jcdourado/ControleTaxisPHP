<?php
  function estado_view($estado){
    switch($estado){
      case "ac": return 'Acre';
      case "al": return 'Alagoas';
      case "am": return 'Amazonas';
      case "ap": return 'Amapá';
      case "ba": return 'Bahia';
      case "ce": return 'Ceará';
      case "df": return 'Distrito Federal';
      case "es": return 'Espírito Santo';
      case "go": return 'Goiás';
      case "ma": return 'Maranhão';
      case "mt": return 'Mato Grosso';
      case "ms": return 'Mato Grosso do Sul';
      case "mg": return 'Minas Gerais'; 
      case "pa": return 'Pará';
      case "pb": return 'Paraíba';
      case "pr": return 'Paraná';
      case "pe": return 'Pernambuco';
      case "pi": return 'Piauí';
      case "rj": return 'Rio de Janeiro';
      case "rn": return 'Rio Grande do Norte';
      case "ro": return 'Rondônia';
      case "rs": return 'Rio Grande do Sul';
      case "rr": return 'Roraima';
      case "sc": return 'Santa Catarina';
      case "se": return 'Sergipe';
      case "sp": return 'São Paulo';
      case "to": return 'Tocantins';
    }
  }


  function tem_form(){
    if($_POST){
      return true;
    }
    return false;
  }

 ?>
