    @include('partials/header')
    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @include('partials/nav')
    <div id="container" >
        <section id="body-container">
          <div id="title-container"><h1 id="title">My Profile</h1></div>
          <img src="/uploads/avatars/{{$user->avatar}}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
          <h2>{{ $user->name }} profile</h2>
          <form class="" action="{{route('profile.update.image.submit')}}" method="post" enctype="multipart/form-data">
            <label>Update Profile Image</label>
            <input type="file" name="avatar" value="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="" value="update profile image">
          </form>

          {{ Form::open(array('url' => '/profile/' . $user->id, 'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
          {{ Form::close() }}

          <a href="{{ url('/logout') }}"> logout </a>
        </section>
    </div>
    @include('partials/footer')
  </body>
