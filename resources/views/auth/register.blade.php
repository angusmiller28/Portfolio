@include('partials/header')
<title>Angus Miller Portfolio - Register</title>

<link href="{{asset('css/register.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>
@include('partials/nav')

<div id="container" >
    <div id="body-container">
      <div id="title-container"><h1 id="title" class="center-text">Register</h1></div>
        <div id="register-form-container" class="form-container ">
          {!! Form::open(['action' => 'Auth\RegisterController@store', 'method' => 'POST']) !!}
          @csrf
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label>Name</label>
              </div>
              @if ($errors->has('name'))
              <div class="form-feedback">
                <label class="feedback invalid-feedback">
                    {{ $errors->first('name') }}
                </label>
              </div>
              @endif
              <div class="form-input">
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" autofocus>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label>Email</label>
              </div>
              @if ($errors->has('email'))
              <div class="form-feedback">
                <label class="feedback invalid-feedback">
                    {{ $errors->first('email') }}
                </label>
              </div>
              @endif
              <div class="form-input">
                <input class="form-control" type="text" name="email" value="{{ old('email') }}"  autofocus>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label>Password</label>
              </div>
              @if ($errors->has('password'))
              <div class="form-feedback">
                <label class="feedback invalid-feedback">
                    {{ $errors->first('password') }}
                </label>
              </div>
              @endif
              <div class="form-input">
                <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}" autofocus>
                <div id="show-password-btn" class="form-icon default">
                  <i class="fas fa-eye"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label>Confirm Password</label>
              </div>
              @if ($errors->has('password_confirmation'))
              <div class="form-feedback">
                <label class="feedback invalid-feedback">
                    {{ $errors->first('password_confirmation') }}
                </label>
              </div>
              @endif
              <div class="form-input">
                <input id="password-confirmation" class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" autofocus>
                <div id="show-password-confirmation-btn" class="form-icon hide">
                  <i class="fas fa-exclamation"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div id="submit-container" class="form-input span-only-input-section">
                {{Form::submit('Register', ['class'=>'btn btn-default'])}}
              </div>

            </div>

          </div>
        {!! Form::close() !!}
      </div>
    </div>
</div>

<script src="{{asset('js/form.js')}}" type="text/javascript"></script>
@include('partials/footer')
</body>
