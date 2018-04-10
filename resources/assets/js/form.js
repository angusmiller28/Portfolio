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
