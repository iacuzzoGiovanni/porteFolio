/*jslint regexp: true, vars: true, white: true, browser: true */
/*global jQuery, google */

( function( $ ) {
	"use strict";

	//globals

	//methods

	var smoothScroll = function(e){
		var the_id = $(this).attr("href"); 
		$('html, body').animate({  
			scrollTop:$(the_id).offset().top  
		}, 'slow');  
		e.preventDefault();
	};

	var checkIsNotEmpty = function(id, name){
		var name = name ? name : id,
			$field = $("#"+id);
		if( !$field.val().length ){
			$field.after('<p class="errors">le champ '+name+' ne peut pas être vide</p>');
			return false;
		}
		return true;
	};

	var checkIsMailOk = function(id){
		var $field = $("#"+id);
		var reg = new RegExp('s^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
		
		if(!reg.test($field.val())){
			$field.after('<p class="errors">le champ '+id+" n'est pas valide</p>");
			return false;
		}
		return true;
	}

	var checkContactForm = function(e){

		// keep this before the checks to remove the previous error messages
		$('#sendResponse, .errors').remove();

		var $contactForm = $('#contactForm'),
			isNameOk = checkIsNotEmpty('nom'),
			isemailOk = checkIsNotEmpty('email') && checkIsMailOk('email'),
			istextOk = checkIsNotEmpty('texte');

		if( isNameOk && isemailOk && istextOk ){

			$.ajax({
				url:"http://iacuzzo-giovanni.com/contact-form.php",
				type:"post",
				data: $contactForm.serialize(),
				success:function(data){
					$contactForm.append('<span id="sendResponse">'+data+'</span>')[0].reset();
				},
				error:function(data){
					$("#email").after('<p class="errors">'+data.responseText+'</p>');
				}
			});
		}
		e.preventDefault();
	};

	//loaded pages
	$(function(){
		$('a[href^="#"]').on("click", smoothScroll);
		$('#contactForm').on("submit", checkContactForm);
	});


}( jQuery ));