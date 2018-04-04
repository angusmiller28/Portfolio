<head>
  <link href="{{asset('css/base.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/nav-scroll.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/actions.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/about.css')}}" type="text/css" rel="stylesheet" />


  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<nav id="nav-scroll-container" class="nav-container">
  <div id="nav-bar-scroll-container" class="nav-bar-container">
    <ul>
      <li id="nav-bar-scroll-logo" class="nav-bar-logo"><div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="logo" height="23.15px" width="62.9px" />
      </div></li>
    </ul>
    <ul class="nav-bar-nav">
      <li><a href="projects.php"><div class="pop nav-project"><i class="fas fa-folder-open"></i></div></a></li>
      <li><a href="index.php"><div class="active"><i class="fas fa-user nav-index"></i></div></a></li>
      <li><div class="nav-link pop quick-nav-btn"><i class="fa fa-link"></i></div></li>
      <li><div class="other-nav-btn pop"><i class="fas fa-bars"></i></div></li>
    </ul>
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('js/nav.js')}}" type="text/javascript"></script>
