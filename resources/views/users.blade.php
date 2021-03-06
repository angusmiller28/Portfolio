<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Angus Miller Portfolio - Projects</title>

            <link href="{{asset('css/css_reset.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('css/footer.css')}}" type="text/css" rel="stylesheet" />

            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

            <meta name="viewport" content="width=device-width, initial-scale=1">
          </head>
          <body>
            <div id="container" >

                @include('partials/nav')

                <section id="body-container">
                  <div id="title-container"><h1 id="title">Users</h1></div>

                  <div id="gallery" class="cards">
                    <ul>
                      @foreach($users as $user)
                          <div class="card">
                            <li>
                              <div class="card card-small"><a href="users/user/<?php echo $user->id ?>">
                                <a href="users/user/<?php echo $user->id ?>">
                                <img src="data:image/png;base64,<?php echo $user->profile_image?>" /></a>
                                <p>{{ $user->name }}</p>
                                {{ Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) }}
                                  {{ Form::hidden('_method', 'DELETE') }}
                                  {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                {{ Form::close() }}
                              </div>
                            </li>
                          </div>
                      @endforeach
                    </ul>
                  </div>
                </section>


                @include('partials/footer')
            </div>

            <script src="{{asset('js/nav.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
          </body>
        </html>
