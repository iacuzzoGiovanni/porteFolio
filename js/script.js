/*jslint regexp: true, vars: true, white: true, browser: true */
/*global jQuery, google */

( function( $ ) {
	"use strict";

	//globals

	//methods
	/*var generateMap = function(){
		var styles = [
			{
				stylers: [{saturation: -100}]
			}
		]

		var styledMap = new google.maps.StyledMapType(styles,
	    {name: "Styled Map"});

	    var mapOptions = {
		    zoom: 15,
		    mapTypeId:google.maps.MapTypeId.ROADMAP,
		    center: new google.maps.LatLng(50.6402707, 5.6204945)
		    };

		var map = new google.maps.Map(document.getElementById('gmap'),
	    mapOptions);

	    map.mapTypes.set('map_style', styledMap);
	    map.setMapTypeId('map_style');
	}*/

	var smoothScroll = function(e){
		var the_id = $(this).attr("href");
		console.log('coucou');  
	    $('html, body').animate({  
	        scrollTop:$(the_id).offset().top  
	    }, 'slow');  
	    return false; 
	};

	//loaded pages
	$(function(){
		$('a[href^="#"]').on("click", smoothScroll);
		console.log('bien chargé');
	});


} )( jQuery );