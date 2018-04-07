<head>
  <link href="{{asset('css/drawer.css')}}" type="text/css" rel="stylesheet" />
</head>
<section id="other-nav-drawer" class="slide-in-to-right hide">
    <ul class="drawer-content-container">
        <ul class="drawer-title-container">
          <li><h3><i class="fa fa-bars"></i>Other Nav</h3></li>
          <li class="close-nav-btn" class="pop"><h3><i class="fa fa-window-close warning"></i></h3></li>
        </ul>
          @if (Auth::check() && Auth::user()->role == "admin" )
            <li class="quick-nav-link"><a href="/admin/profile"><p>My Admin Profile</p></a></li>
          @elseif (Auth::check() && Auth::user()->role == "user")
            <li class="quick-nav-link"><a href="/profile"><p>My Profile</p></a></li>
          @else
            <li class="quick-nav-link"><a href="/register"><p>Register</p></a></li>
            <li class="quick-nav-link"><a href="/login"><p>Login</p></a></li>
          @endif
          <li class="quick-nav-link"><a href="/resume"><p>Resume</p></a></li>
          <li class="quick-nav-link"><a href="/projects"><p>Projects</p></a></li>
          <li class="quick-nav-link"><a href="/blogs"><p>Blogs</p></a></li>
    </ul>
</section>
<script src="{{asset('js/other-nav.js')}}" type="text/javascript"></script>
