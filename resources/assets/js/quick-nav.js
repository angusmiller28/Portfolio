$(document).ready(function(){
    $(".quick-nav-btn").click(function(){
        $("#quick-nav-drawer").removeClass("hide");
        $("#quick-nav-drawer").addClass("drawer-container");
        $(".quick-nav-btn").toggleClass("active");

        // if($(window).width() <= 1200){
        //   $(".drawer-container").toggleClass("flex-content");
        // }
    });

    $(".close-nav-btn, .quick-nav-link").click(function(){
      $("#quick-nav-drawer").addClass("hide");
      $("#quick-nav-drawer").removeClass("drawer-container");
      $(".quick-nav-btn").toggleClass("active");


    });
});
