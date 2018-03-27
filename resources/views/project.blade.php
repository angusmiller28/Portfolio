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
            <div id="container" >

                @include('partials/nav');

                <section id="body-container">
                  <ul id="project-title-container">
                    <li><div id="title-container"><h1 id="title-no-gradient">{{ $projectName }}</h1></div></li>
                    <li><div id="subtitle-container"><h4 id="subtitle">{{ $projectSubTitle }}</h4></div></li>
                  </ul>
                  <ul id="project-main-image-container">
                    <li><img src="data:image/png;base64,{{ $displayImageBack }}" alt=""></li>
                    <li><img src="data:image/png;base64,{{ $displayImageFront }}" alt=""></li>

                  </ul>

                  <ul id="project-description-container">
                    <li>
                      <p>
                          {{ $projectDescription }}
                      </p>
                    </li>
                    <li>

                    @if(isset($video)) <!-- Video -->
                      <div class="">
                          <video width="320" height="240" controls src="data:video/mp4;base64,{{$video}}" autoplay>
                            Your browser does not support the video tag.
                          </video>
                      </div>
                    @endif <!-- END::Tools List -->

                    </li>
                    <li>
                      @if(isset($tools)) <!-- Tools List -->
                      <ul>
                        <li><p>Built with</p></li>
                        @foreach($tools as $t)
                          <li><p><a href="{{$t->link}}"> {{ $t->name }}</a></p></li>
                        @endforeach
                      </ul>
                      @endif <!-- END::Tools List -->

                      @if(empty($socials)) <!-- Socials List -->
                        <ul>
                          <li><p>Social on</p></li>
                          @foreach($socials as $s)
                            <li><p><a href="{{$s->link}}"> {{ $s->name }}</a></p></li>
                          @endforeach
                        </ul>
                      @endif <!-- END::Socials List -->
                    </li>
                  </ul>

                  <ul id="back-container">
                    <li><h3><i class="fas fa-arrow-circle-left"></i></h3></li>
                    <li><h3><a href="/projects">Back to Projects</a></h3></li>
                  </ul>
                </section>

                @include('partials/footer')
            </div>

            <script src="{{asset('js/nav.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
          </body>
        </html>
