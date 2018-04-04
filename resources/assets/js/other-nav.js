$(document).ready(function(){
    $(".other-nav-btn").click(function(){
        $("#other-nav-drawer").removeClass("hide");
        $("#other-nav-drawer").addClass("drawer-container");
        $(".other-nav-btn").toggleClass("active");

        // if($(window).width() <= 1200){
        //   $(".drawer-container").toggleClass("flex-content");
        // }
    });

    $(".close-nav-btn").click(function(){
      $("#other-nav-drawer").addClass("hide");
      $("#other-nav-drawer").removeClass("drawer-container");
      $(".other-nav-btn").toggleClass("active");


    });
});
