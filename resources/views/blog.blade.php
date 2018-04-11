<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/css_reset.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/blog.css')}}" type="text/css" rel="stylesheet" />
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

      <h1>{{ $name }}</h1>
      <ul>
        <li><p><img src="/uploads/avatars/{{$adminAvatar}}" alt="" style="width: 50px; height: 50px; border-radius: 50%">{{$adminName}} | {{$createdOn}}</p></li> <!-- add profile icon, profile name and date -->
      </ul>
      <img id="hero-image" src="/uploads/blogs/<?php echo $displayImage?>" /></a>
    </div><!-- END::HEADER CONTAINER -->



    <div id="container">
      <!-- SOCIALS CONTAINER -->
      <div class="social-container">
        <div >
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
      </div>

      <!-- BODY CONTAINER -->
      <div class="center-content">
        <div id="body">
          <?php
          $doc = new DOMDocument();
          $doc->loadHTML("".$content."");
          echo $doc->saveHTML();
          ?>
        </div><!-- END::BODY CONTAINER -->
      </div>

    </div>

    <div id="comments-form-container">
      {{ Form::open(['route' => ['comments.store', $blogId], 'method' => 'POST']) }}
        {{ Form::label('name'), "Name:" }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::label('email'), "Email:" }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}

        {{ Form::label('comment'), "Comment:" }}
        {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

        {{ Form::submit('Add Comment', ['class' => 'form-control btn btn-default']) }}
      {{ Form::close() }}
    </div>

    <div id="comments-container">
      @foreach($blogComments as $comment)
        <div class="comment">
          <p>Name: {{ $comment->name }}</p>
          <p>Name: {{ $comment->comment }}</p>
        </div>
      @endforeach
    </div>
    @include('partials/footer')
  </body>
</html>
