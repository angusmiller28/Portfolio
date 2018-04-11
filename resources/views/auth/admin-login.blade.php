@include('partials/header')
<title>Angus Miller Portfolio - Login</title>

<link href="{{asset('css/login.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>
@include('partials/nav')
@include('partials/messages')
<div id="container" >
    <section id="body-container">
      <div id="title-container"><h1 id="title">Admin Login</h1></div>

      <div id="login-form-container" class="form-container center-content">
        <form method="POST" action="{{ route('admin.login.submit') }}">
          @csrf
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label for="email">{{ __('E-Mail Address') }}</label>
              </div>
              @if ($errors->has('email'))
              <div class="form-feedback">
                <label class="feedback invalid-feedback">
                    {{ $errors->first('email') }}
                </label>
              </div>
              @endif
              <div class="form-input">
                <input class="form-control" type="text" name="email" value="{{ old('email') }}" autofocus>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div class="form-title">
                <label for="password">{{ __('Password') }}</label>
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
              <div class="form-input">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div id="submit-container" class="form-input span-only-input-section">
                <button type="submit" class="btn btn-default">
                  {{ __('Login') }}
                </button>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-content">
              <div id="forgot-password-container" class="form-input span-only-input-section">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>

  <script src="{{asset('js/form.js')}}" type="text/javascript"></script>
  @include('partials/footer')
</body>
