<nav class="nav-container">
  <div class="nav-bar-container">
    <ul>
      <ul>
        <li class="nav-bar-logo"><div class="logo">
          <img src="{{asset('img/logo.png')}}" alt="logo" height="23.15px" width="62.9px" />
        </div></li>
      </ul>
      <ul class="slogan-container">
        <li class="slogan"><div>
          <h3>Web Designer & Developer</h3>
        </div></li>
      </ul>
    </ul>

    <ul class="nav-bar-nav">
      <li><a href="/projects"><div class="pop nav-project"><i class="fas fa-folder-open"></i></div></a></li>
      <li><a href="/"><div class="active"><i class="fas fa-user nav-index"></i></div></a></li>
      <li><div class="nav-link pop quick-nav-btn"><i class="fa fa-link"></i></div></li>
      <li><div class="other-nav-btn pop"><i class="fas fa-bars"></i></div></li>
    </ul>
  </div>
</nav>
@include('partials/messages')
@include('partials/nav_scroll')
@include('partials/other_nav')
