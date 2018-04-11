    @include('partials/header')
    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @include('partials/nav')
    <div id="container" >
        <section id="body-container">
          <div id="title-container"><h1 id="title">Projects</h1></div>

          <div id="gallery" class="cards">
            <ul>
              @foreach($projects as $project)
                  <div class="card">
                    <li>
                      <div class="card card-small"><a href="projects/project/{{$project->id}}">
                      <img src="/uploads/projects/{{$project->cover_image}}" /></a>
                      </div>
                    </li>
                  </div>
              @endforeach
            </ul>
          </div>
        </section>
    </div>
    @include('partials/footer')
  </body>
