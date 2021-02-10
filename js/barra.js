$(document).ready(function(){
    var scroll;
    
    $(window).scroll(function(){
        scroll = $(window).scrollTop();

        if(scroll > 350){
            $("nav").css({"background": "#01F6F6"});
    
            $("nav").css({"box-shadow": "12px"});

        }else{
            $("nav").css({"background": "transparent"});
        }
    });

});