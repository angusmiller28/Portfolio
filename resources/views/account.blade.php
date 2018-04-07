    @include('partials/header')
    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @include('partials/nav')
    <div id="container" >
      <img src="/uploads/avatars/{{$avatar}}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
        <p>{{$name}}</p>
        <p>{{$email}}</p>
        <p>{{$jobTitle}}</p>
    </div>
    @include('partials/footer')
  </body>
