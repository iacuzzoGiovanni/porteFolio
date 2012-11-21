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
	    return false; 
	};

	var checkContactForm = function(e){
		e.preventDefault();
		
		var sNom = $('#nom').val();
		var sEmail = $('#email').val();
		var sMessage = $('#texte').val();

		$.ajax(
			{
				url:"http://localhost:8888/portefolio/contact-form.php",
				type:"post",
				data:{
					nom:sNom,
					email:sEmail,
					texte:sMessage,
					estAjax:1
				},
				success:function(data){
					console.log(data);
					if($('#sendResponse')){
						$('#sendResponse').remove();
						$('#nom').val('');
						$('#email').val('');
						$('#texte').val('');
						$('<span id="sendResponse">'+data+'</span>').appendTo('#contactForm');
					}else{
						$('<span id="sendResponse">'+data+'</span>').appendTo('#contactForm');
					}
					
				}

			}
		)
	}

	//loaded pages
	$(function(){
		$('a[href^="#"]').on("click", smoothScroll);
		$('#sendContactMail').on("click", checkContactForm);
	});


} )( jQuery );