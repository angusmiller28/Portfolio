$(document).ready(function(){
    $(".search-nav-btn").click(function(){
        $("#search-nav-drawer").removeClass("hide");
        $("#search-nav-drawer").addClass("drawer-container");
        $(".search-nav-btn").toggleClass("active");

        // if($(window).width() <= 1200){
        //   $(".drawer-container").toggleClass("flex-content");
        // }
    });

    $(".close-nav-btn").click(function(){
      $("#search-nav-drawer").addClass("hide");
      $("#search-nav-drawer").removeClass("drawer-container");
      $(".search-nav-btn").toggleClass("active");
    });
});
