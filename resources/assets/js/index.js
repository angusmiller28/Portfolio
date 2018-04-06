$(document).ready(function(){
    var lastScrollTop = 0;
    $(window).scroll(function(event){
      var st = $(this).scrollTop();
      console.log(st);

      // social section
      if (st >= 650 && st <= 736 ){
        // linkedin
        $("#social-linkedin-icon").addClass("shift-down");
        $("#social-linkedin-icon").addClass("fa-linkedin-in");
        $("#social-linkedin-icon").removeClass("fa-linkedin");
        // facebook
        $("#social-facebook-icon").addClass("shift-down");
        $("#social-facebook-icon").addClass("fa-facebook-f");
        $("#social-facebook-icon").removeClass("fa-facebook-square");
        // github
        $("#social-github-icon").addClass("shift-down");
        $("#social-github-icon").addClass("fa-github-alt");
        $("#social-github-icon").removeClass("fa-github");
        // twitter
        $("#social-twitter-icon").addClass("shift-down");
        $("#social-twitter-icon").addClass("fa-twitter");
        $("#social-twitter-icon").removeClass("fa-twitter-square");
        // google+
        $("#social-google-icon").addClass("shift-down");
        $("#social-google-icon").addClass("fa-google-plus-g");
        $("#social-google-icon").removeClass("fa-google-plus-square");
        // reddit
        $("#social-reddit-icon").addClass("shift-down");
        $("#social-reddit-icon").addClass("fa-reddit-alien");
        $("#social-reddit-icon").removeClass("fa-reddit-square");
      }
      else if ((st >= 0 && st <= 649) || st >= 1176){
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
        // twitter
        $("#social-twitter-icon").removeClass("shift-down");
        $("#social-twitter-icon").removeClass("fa-twitter");
        $("#social-twitter-icon").addClass("fa-twitter-square");
        // google+
        $("#social-google-icon").removeClass("shift-down");
        $("#social-google-icon").removeClass("fa-google-plus-g");
        $("#social-google-icon").addClass("fa-google-plus-square");
        // reddit
        $("#social-reddit-icon").removeClass("shift-down");
        $("#social-reddit-icon").removeClass("fa-reddit-alien");
        $("#social-reddit-icon").addClass("fa-reddit-square");

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
