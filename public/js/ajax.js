$(document).ready(function(){
  $(".en_btn").click(function(){
      var lan = document.getElementById('translate');
      lan.innerHTML = 'Translate to Persian';
  });

  $(".pe_btn").click(function(){
      var lan = document.getElementById('translate');
      lan.innerHTML = 'Translate to English';
  });
});
