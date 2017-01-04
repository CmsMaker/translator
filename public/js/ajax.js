$(document).ready(function(){

  $(".en_btn").click(function(){
      var lan = document.getElementById('translate');
      var input_lan = document.getElementById('lan');
      input_lan.value = 'en';
      lan.innerHTML = 'ترجمه به فارسی';
  });

  $(".pe_btn").click(function(){
      var lan = document.getElementById('translate');
      var input_lan = document.getElementById('lan');
      input_lan.value = 'pe';
      lan.innerHTML = 'ترجمه به انگلیسی';
  });

  $(".translate").click(function(){

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	})

    var lan = document.getElementById('lan').value;
    var word = document.getElementById('word').value

    $.post( "/search", { lan: lan, word: word } , function(data){
      var search = document.getElementById('search');
      search.innerHTML = data['msg'];
	}, "json")
	.fail( function(data) {
		console.log( data );
	});


  });

});
