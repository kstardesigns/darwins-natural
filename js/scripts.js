
$(document).ready(function(){

    $(document).ready(function() {  
        var menu        = $('nav .menu'); 
            dropdown    = $('nav ul'); 
      
        menu.on('click', function(e) {
            e.preventDefault();  
            dropdown.slideToggle();
            menu.toggleClass('menuclose');  
        });
          
    }); 

    /* checks for window width to fix navigation */
    $(window).resize(function(){ 
    	var nav = $("nav ul"); 
    	var navimg = $("nav .menu");
        var w = $(window).width(); 
        if((w + 17) > 780) {  
             nav.addClass('flex'); 
        } else {
        	nav.removeClass('flex');
        }   
    }); 

});