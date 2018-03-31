// JavaScript Document
	"use strict"	
		
	$(document).ready(function(){
		  $(".owl-carousel").owlCarousel();
		});
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items:6,
			loop:true,
			margin:0,
			autoplay:true,
			autoplayTimeout:2000,
			autoplayHoverPause:true,
			responsive:{
				0:{
					items:2,
				},
				768:{
					items:4,
				},
				992:{
					items:6,
				}
			}
		});
		$('.play').on('click',function(){
			owl.trigger('autoplay.play.owl',[1000])
		})
		$('.stop').on('click',function(){
			owl.trigger('autoplay.stop.owl')
		})
		
		
		function openNav() {
			$("#mySidenav").css("width", 315);
			$("#mySidenav").css("marginLeft", 0);
			$("#mySidenav").css("backgroundColor", rgba(0,0,0,0.4));
		}

		/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
		function closeNav() {
			$("#mySidenav").css("width", 0);
			$("#mySidenav").css("marginLeft", 0);
			$("#mySidenav").css("backgroundColor", "#333");
		}

	
		
	
