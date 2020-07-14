function modulo(arquivo){
  console.log(arquivo);
  $(".conteudo").load(arquivo);
}

function sair(){
  var sair = confirm("Deseja Realmente sair do sistema");

  if(sair==true){
    window.location.assign("index.php");
  }
}
