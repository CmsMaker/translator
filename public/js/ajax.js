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
	  
	 
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	})

    $.post( "/search", { name: "Donald Duck", city: "Duckburg" } , function(data){
		console.log( "data Back ! " + data );
	}, "json")
	.fail( function(data) {
		console.log( data );
	});
	
	
  });

});
