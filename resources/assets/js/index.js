$(document).ready(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(event){
      var st = $(this).scrollTop();
      console.log(st);

      // social section
      if (st >= 590 && st <= 736 ){
        // linkedin
        $("#social-linkedin-icon").addClass("shift-down");
        $("#social-linkedin-icon").addClass("fa-linkedin-in");
        $("#social-linkedin-icon").removeClass("fa-linkedin");
        // facebook
        $("#social-facebook-icon").addClass("shift-down");
        $("#social-facebook-icon").addClass("fa-facebook-f");
        $("#social-facebook-icon").removeClass("fa-facebook-square");
        // phone
        $("#social-github-icon").addClass("shift-down");
        $("#social-github-icon").addClass("fa-github-alt");
        $("#social-github-icon").removeClass("fa-github");
      }
      else if ((st >= 0 && st <= 589) || st >= 1176){
        // linkedin
        $("#social-linkedin-icon").removeClass("shift-down");
        $("#social-linkedin-icon").removeClass("fa-linkedin-in");
        $("#social-linkedin-icon").addClass("fa-linkedin");
        // facebook
        $("#social-facebook-icon").removeClass("shift-down");
        $("#social-facebook-icon").removeClass("fa-facebook-f");
        $("#social-facebook-icon").addClass("fa-facebook-square");
        // github
        $("#social-github-icon").removeClass("shift-down");
        $("#social-github-icon").removeClass("fa-github-alt");
        $("#social-github-icon").addClass("fa-github");
      }

      // contact section
      if (st >= 1176 && st <= 1185 ){
        // envelope
        $("#contact-address-icon").addClass("shift-down");
        $("#contact-address-icon").addClass("fa-envelope-open");
        $("#contact-address-icon").removeClass("fa-envelope");
        // map
        $("#contact-map-icon").addClass("shift-down");
        $("#contact-map-icon").addClass("fa-map-pin");
        $("#contact-map-icon").removeClass("fa-map");
        // phone
        $("#contact-phone-icon").addClass("shift-down");
        $("#contact-phone-icon").addClass("fa-phone-volume");
        $("#contact-phone-icon").removeClass("fa-phone");
      }
      else if ((st >= 0 && st <= 1175) || st >= 1740){
        // envelope
        $("#contact-address-icon").removeClass("shift-down");
        $("#contact-address-icon").removeClass("fa-envelope-open");
        $("#contact-address-icon").addClass("fa-envelope");
        // map
        $("#contact-map-icon").removeClass("shift-down");
        $("#contact-map-icon").removeClass("fa-map-pin");
        $("#contact-map-icon").addClass("fa-map");
        // phone
        $("#contact-phone-icon").removeClass("shift-down");
        $("#contact-phone-icon").removeClass("fa-phone-volume");
        $("#contact-phone-icon").addClass("fa-phone");
      }
    });

    $("#cover-letter-content").hide();
    $("#cover-letter-btn").click(function(){
        $("#cover-letter-content").toggle();
        $("#cover-letter-btn").toggleClass("fa-arrow-circle-down");
        $("#cover-letter-btn").toggleClass("fa-window-close");
    });
  });
