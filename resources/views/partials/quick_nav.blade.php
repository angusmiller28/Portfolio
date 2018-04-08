<head>
  <link href="{{asset('css/drawer.css')}}" type="text/css" rel="stylesheet" />
</head>
<section id="quick-nav-drawer" class="slide-in-to-right hide">
    <ul class="drawer-content-container">
        <ul class="drawer-title-container">
          <li><h3><i class="fa fa-link"></i>Quick Nav</h3></li>
          <li class="close-nav-btn" class="pop"><h3><i class="fa fa-window-close warning"></i></h3></li>
        </ul>
        @foreach($quickNavData as $name => $link)
          <li class="quick-nav-link"><a href="{{$link}}"><p>{{$name}}</p></a></li>
        @endforeach
    </ul>
</section>
<script src="{{asset('js/quick-nav.js')}}" type="text/javascript"></script>
