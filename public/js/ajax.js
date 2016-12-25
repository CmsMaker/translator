$(document).ready(function(){
  $(".en_btn").click(function(){
      var lan = document.getElementById('translate');
      var input_lan = document.getElementById('lan');
      input_lan.value = 'en';
      lan.innerHTML = 'Translate to Persian';
  });

  $(".pe_btn").click(function(){
      var lan = document.getElementById('translate');
      var input_lan = document.getElementById('lan');
      input_lan.value = 'pe';
      lan.innerHTML = 'Translate to English';
  });

  $(".translate").click(function(){
    alert('sepideh');
    $.post("search",
    {
        name: "Donald Duck",
        city: "Duckburg"
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});

});
