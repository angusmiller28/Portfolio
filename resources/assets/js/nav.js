$(document).ready(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(event){
       var st = $(this).scrollTop();

       if (st > lastScrollTop || lastScrollTop < 100){
           $("#nav-bar-scroll-container").css("display","none");
       } else {
           if(lastScrollTop > 100){
            $("#nav-bar-scroll-container").css("display","flex");
           }
       }
       lastScrollTop = st;
    });
  });
