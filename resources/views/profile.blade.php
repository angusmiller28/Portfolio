@include('partials/header')
<title>Angus Miller Portfolio - Projects</title>

<link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>
@include('partials/nav')
<div id="container" >
    <section id="body-container">
      <div id="title-container"><h1 id="title">My Profile</h1></div>
      <div class="profile-container">
        <img src="/uploads/avatars/{{$user->avatar}}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
        <h2>{{ $user->name }} profile</h2>
        <form class="" action="{{route('profile.update.image.submit')}}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label>Update Profile Image</label>
              </div>
              @if ($errors->has('avatar'))
              <div id="form-feedback-server" class="form-feedback">
                <label class="feedback invalid-feedback">
                    {{ $errors->first('avatar') }}
                </label>
              </div>
              @endif
              <div class="form-feedback" style="margin-top: 20px">
                <label id="form-file-message">
                </label>
              </div>
              <div class="form-description">
                <p>File Upload Limit: 2MB</p>
              </div>
              <div class="form-input form-file">
                <label id="form-file-name"></label>
                <label id="filev" class="file btn-default">Browse
                  <input  id="filea" type="file" name="avatar" value="" class=" file-container btn " >
                </label>
                <div id="file-status" class="form-icon hide">
                  <i class="fas fa-check"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div id="submit-container" class="form-input span-only-input-section">
                <input type="submit" name="" value="Update Profile Image" class="btn btn-default">
              </div>
            </div>
          </div>
        </form>

        {{ Form::open(array('url' => '/profile/' . $user->id, 'class' => 'pull-right')) }}
        <div class="form-group">
          <div class="form-content">
          {{ Form::hidden('_method', 'DELETE') }}
          </div>
        </div>
        <div class="form-group">
          <div class="form-content">
            <div id="submit-container" class="form-input span-only-input-section">
              {{Form::submit('Delete Profile', ['class'=>'btn btn-warning'])}}
            </div>
          </div>
        </div>
        {{ Form::close() }}


          <a href="{{ url('/logout') }}"> logout </a>

      </div>

    </section>
</div>
<script src="{{asset('js/form.js')}}" type="text/javascript"></script>
@include('partials/footer')
</body>
