var campoNome = document.getElementById('campoNome');
var table = document.getElementById('tabelaResultado');
campoNome.addEventListener('keyup',
  function (){
    var nomeBuscar = campoNome.value

    var toURL = encodeURI(nomeBuscar);

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function(){
      table.innerHTML = ajax.responseText;
    }

    ajax.open("get","../Controller/ajax.php?nomeBuscar="+toURL,true);
    ajax.send();

  }
);
