'use strict' ;

$(function () {
$('document').ready(function(){
	recupMessages();
	$('.formulaire').submit(function(){
		var name = $('.nom').val();
		var message = $('.message').val();
		$.post('send.php', {nom:name, message:message}, function(data){
			$('.return').html(data).slideDown();
			$('.nom').val('');
			$('.message').val('');
			recupMessages();
		});
		return false;
	});
	
	function recupMessages(){
		
		$.post('getMessages.php', function(dataDb){
			$('.afficher').html(dataDb);
		})
	}
	
	setInterval(recupMessages,1000);
});
})();