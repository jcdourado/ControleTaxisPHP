var campoNome = document.getElementById('campoNome');
var table = document.getElementById('tabelaResultado');
var btnExibirTodos = document.getElementById('btnExibir');

campoNome.addEventListener('keyup',verificaQtd);
campoNome.addEventListener('paste',verificaQtd);

btnExibirTodos.addEventListener('click',function (){
  buscar('');
});

function verificaQtd(){
  if(this.value.length >=3 ){
    buscar(this.value);
  }
}


function buscar(nomeB){
    console.log(nomeB);
    var nomeBuscar = campoNome.value

    var toURL = encodeURI(nomeB);

    var ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function(){
      table.innerHTML = ajax.responseText;
    }

    ajax.open("get","../Controller/ajax.php?nomeBuscar="+toURL,true);
    ajax.send();
}
