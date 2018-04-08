<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/css_reset.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/project.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" type="text/css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    @include('partials/nav')

    <!-- HEADER CONTAINER -->
    <div id="header-container"  style="background: {{$themeColour}} !important">
      <img src="data:image/png;base64,<?php echo $displayImage?>" /></a>
      <h1>{{ $name }}</h1>
      <ul>
        <li><p><img src="/uploads/avatars/{{$adminAvatar}}" alt="" style="width: 50px; height: 50px; border-radius: 50%">{{$adminName}} | {{$createdOn}}</p></li> <!-- add profile icon, profile name and date -->
      </ul>
    </div><!-- END::HEADER CONTAINER -->

    <div id="container">
      <!-- SOCIALS CONTAINER -->
      <div class="social-container">
        <ul>
          @if($twitterShareFlag == 1)
            <li><div style="display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; border-radius: 50%; background-color: orange"><i class="fab fa-twitter"></i></div></li> <!-- add twitter social share -->
          @endif
          @if($facebookShareFlag == 1)
            <li><div style="display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; border-radius: 50%; background-color: orange"><i class="fab fa-facebook-f"></i></div></li> <!-- add facebook social share -->
          @endif
          @if($googleShareFlag == 1)
            <li><div style="display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; border-radius: 50%; background-color: orange"><i class="fab fa-google-plus-g"></i></div></li> <!-- add google+ social share -->
          @endif
          @if($redditShareFlag == 1)
            <li><div style="display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; border-radius: 50%; background-color: orange"><i class="fab fa-reddit-alien"></i></div></li> <!-- add reddit social share -->
          @endif
          @if($emailShareFlag == 1)
            <li><div style="display: flex; justify-content: center; align-items: center; width: 50px; height: 50px; border-radius: 50%; background-color: orange"><i class="fa fa-envelope"></i></div></li> <!-- add email social share -->
          @endif
        </ul>
      </div><!-- END::SOCIALS CONTAINER -->

      <!-- BODY CONTAINER -->
      <div id="body">
        <?php
        $doc = new DOMDocument();
        $doc->loadHTML("".$content."");
        echo $doc->saveHTML();
        ?>
      </div><!-- END::BODY CONTAINER -->
    </div>

    @include('partials/footer')
  </body>
</html>
