$(document).ready(function(){
    $("#show-password-btn").click(function(){
        $password = $('#password');
        $password_confirmation = $('#password-confirmation');
        if($password.attr('type') == 'text'){
          $password.attr('type', 'password');
          $password_confirmation.attr('type', 'password');
          $("#show-password-btn i").removeClass('fa-eye-slash');
          $("#show-password-btn i").addClass('fa-eye');
        } else {
          $password.attr('type', 'text');
          $password_confirmation.attr('type', 'text');
          $("#show-password-btn i").removeClass('fa-eye');
          $("#show-password-btn i").addClass('fa-eye-slash');
        }
    });

    $(document).on('change','#filev' , function(){
      $file = $('.file input[type=file]');
      $filename = $('.file input[type=file]').val().split('\\').pop();

      $('#form-file-name').css('margin-right','10px');
      $('#form-file-name').text($filename);


    });

    $(document).on('change','#filea' , function(){
      $max_file_size = 2048000;
      $file_size = this.files[0].size;

      $("#file-status").removeClass("hide");
      $("#form-feedback-server").remove();

      // check file size not over
      if($max_file_size < $file_size){
        $("#file-status").removeClass("success");
        $("#file-status").addClass("error");
        $("#file-status i").removeClass('fa-check');
        $("#file-status i").addClass('fa-exclamation');
        $("#form-file-message").text("Selected file is over 2MB!");
        $("#form-file-message").css({"color":"#eb0d0d","font-size":"0.8em","background-color":"white", "padding":"10px"});
      } else {
        $("#file-status").removeClass("error");
        $("#file-status").addClass("success");
        $("#file-status i").removeClass('fa-exclamation');
        $("#file-status i").addClass('fa-check');
        $("#form-file-message").text("Selected file is ok");
        $("#form-file-message").css({"color":"#0deb94","font-size":"0.8em"});
      }

    });

    $("#password-confirmation").on('keyup',function(){
      $password_confirmation_value=$(this).val();
      $password_value=$("#password").val();
      $("#show-password-confirmation-btn").removeClass("hide");
      if($password_confirmation_value == $password_value){
        $("#show-password-confirmation-btn").removeClass("error");
        $("#show-password-confirmation-btn").addClass("success");
        $("#show-password-confirmation-btn i").removeClass('fa-exclamation');
        $("#show-password-confirmation-btn i").addClass('fa-check');
      } else {
        $("#show-password-confirmation-btn").removeClass("success");
        $("#show-password-confirmation-btn").addClass("error");
        $("#show-password-confirmation-btn i").removeClass('fa-check');
        $("#show-password-confirmation-btn i").addClass('fa-exclamation');
      }

    });
    $("#password-confirmation").on('focus',function(){
      $password_confirmation_value=$(this).val();
      $password_value=$("#password").val();

      if($password_value != '')
        $("#show-password-confirmation-btn").removeClass("hide");

      if($password_confirmation_value == $password_value){
        $("#show-password-confirmation-btn").removeClass("error");
        $("#show-password-confirmation-btn").addClass("success");
        $("#show-password-confirmation-btn i").removeClass('fa-exclamation');
        $("#show-password-confirmation-btn i").addClass('fa-check');
      } else {
        $("#show-password-confirmation-btn").removeClass("success");
        $("#show-password-confirmation-btn").addClass("error");
        $("#show-password-confirmation-btn i").removeClass('fa-check');
        $("#show-password-confirmation-btn i").addClass('fa-exclamation');
      }

    });


});
