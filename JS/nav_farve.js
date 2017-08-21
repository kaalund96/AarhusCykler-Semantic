// JavaScript Documents
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(window).scrollTop() > $(window).height()) {
             $('#navigation').css({
          "background-color": "rgba(183,50,41,1.00)"  
			 });
        }else {
            $('#navigation').css({
        "background-color": "rgba(183,50,41,0.00)"  
			});
        }
});
});
