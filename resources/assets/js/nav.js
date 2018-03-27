$(document).ready(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(event){

       var st = $(this).scrollTop();
       console.log(st);
       if (st > lastScrollTop || lastScrollTop < 100){
           $("#nav-bar-container").removeClass("fixedNav");
            $("#nav-bar-outside").removeClass("fixedNav");
            $("#nav-bar-outside").removeClass("float-right");
            $("#slogan").removeClass("hide-content");
       } else {
           if(lastScrollTop > 100){
               $("#nav-bar-container").addClass("fixedNav");
               $("#nav-bar-outside").addClass("fixedNav");
               $("#nav-bar-outside").addClass("float-right");
               $("#slogan").addClass("hide-content");
           }

       }
       lastScrollTop = st;
    });
  });
