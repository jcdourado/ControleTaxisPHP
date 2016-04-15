var campoNome = document.getElementById('campoNome');
var table = document.getElementById('tabelaResultado');
campoNome.addEventListener('keyup',buscar);
campoNome.addEventListener('change',buscar);
campoNome.addEventListener('paste',buscar);




function buscar(){
  if(campoNome.value.length >= 3){
    var nomeBuscar = campoNome.value

    var toURL = encodeURI(nomeBuscar);

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function(){
      table.innerHTML = ajax.responseText;
    }

    ajax.open("get","../Controller/ajax.php?nomeBuscar="+toURL,true);
    ajax.send();
  }
}
