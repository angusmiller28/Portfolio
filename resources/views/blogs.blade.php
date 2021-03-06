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
            @include('partials/nav')
            
            <div id="container" >
                <section id="body-container">
                  <div id="title-container"><h1 id="title">Blogs</h1></div>

                  <div id="gallery" class="cards">
                    <ul>
                      @foreach($blogs as $blog)
                          <div class="card">
                            <li>
                              <div class="card card-small"><a href="blogs/blog/{{ $blog->id }}">
                              <img src="/uploads/blogs/{{ $blog->cover_image }}" /></a>
                              </div>
                            </li>
                          </div>
                      @endforeach
                    </ul>
                  </div>
                </section>



            </div>
            @include('partials/footer')
            <script src="{{asset('js/nav.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
          </body>
        </html>
