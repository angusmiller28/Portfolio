$(document).ready(function(){
    $("#cover-letter-content").hide();
    $("#cover-letter-btn").click(function(){
        $("#cover-letter-content").toggle();
    });

    $(".quick-nav-btn").click(function(){
        $("#quick-index-container").toggle();
        $(".quick-nav-btn").toggleClass("active");

        if($(window).width() <= 1200){
          $("#quick-index-container").toggleClass("flex-content");
        }
    });

    $("#close-quick-nav-btn, .quick-nav-link").click(function(){
      if($(window).width() <= 1200){
        $("#quick-nav-btn").removeClass("active");
        $("#nav-bar-container").removeClass("fixedNav");
          $("#quick-index-container").css("display","none");
        $("#quick-index-container").removeClass("flex-content");
      }

    });
});
