$(".nav-item").click(function() {
	
	var scroll_item = $(this).data("scroll");

		$('html, body').animate({
	        scrollTop: ($("."+scroll_item+"").offset().top)
	    }, 500);

});


// ANIMATIE OVERIGE

$(document).ready(function(){
	
	var controller = new ScrollMagic.Controller();
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.home',
		triggerHook: 0.78,
		duration: 1000
	})
	.setClassToggle('.home1', 'actief')	
	.addTo(controller);
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.about',
		triggerHook: 0.78,
		duration: 1000
	})
	.setClassToggle('.about2', 'actief')	
	.addTo(controller);

	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.work',
		triggerHook: 0.78,
		duration: 1000
	})
	.setClassToggle('.work3', 'actief')	
	.addTo(controller);
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.contact',
		triggerHook: 0.78,
		duration: 1000
	})
	.setClassToggle('.contact4', 'actief')	
	.addTo(controller);	
	
	
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.content',
		triggerHook: 0.68,
		duration: 900
	})
	.setClassToggle('.content', 'fade-in')	
	.addTo(controller);	
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.about-content',
		triggerHook: 0.68,
		duration: 900
	})
	.setClassToggle('.about-content', 'fade-in')	
	.addTo(controller);	
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.work-content',
		triggerHook: 0.68,
		duration: 900
	})
	.setClassToggle('.work-content', 'fade-in')	
	.addTo(controller);	
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.contact-content',
		triggerHook: 0.68,
		duration: 900
	})
	.setClassToggle('.contact-content', 'fade-in')	
	.addTo(controller);
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.exit-content-top',
	})
	.setClassToggle('.exit-content-top', 'fade-in')	
	.addTo(controller);
	
	var ourScene = new ScrollMagic.Scene({
		triggerElement: '.exit-content-top',
		triggerHook: 0.68,
	})
	.setClassToggle('.exit-content-bottom', 'fade-in')	
	.addTo(controller);	
	
});

function ClearFields() {

     document.getElementById("name").value = "";
}



$('#email').blur(function() {
	
	var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	if (testEmail.test(this.value))
	    $(".form-group").addClass("success");
	else
	    $(".form-group").addClass("fail");
	    $(".fail-message").addClass("active");
});
		
