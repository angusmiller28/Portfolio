  @include('partials/header')
  <link href="{{asset('css/index.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/about.css')}}" type="text/css" rel="stylesheet" />
  <title>Angus Miller Portfolio - Resume</title>
</head>

<body>
  @include('partials/nav')
  @include('partials/quick_nav')
  @include('partials/about')

  <div id="container">
    <section id="body-container">
      <div id="nav-outside">
        <ul id="nav-bar-outside">
          <li><a href="projects.php"><div class="nav-projects pop"><i class="fas fa-folder-open"></i></div></a></li>
          <li><a href="index.php"><div class="nav-index active"><i class="fas fa-user"></i></div></a></li>

          <li><a href=""><div class="nav-more "><i class="fas fa-bars"></i></div></a></li>
        </ul>
      </div>

      <div id="title-container"><h1 id="title">Resume</h1></div>

      <ul id="cover-letter-container">
        <li>
          <ul class="item-list-title">
            <li><h3><i class="fas fa-file-alt"></i></h3></li>
            <li><h3>Cover Letter</h3></li>
            <li class="pop"><h3><i id="cover-letter-btn"class="fas fa-arrow-circle-down"></i></h3></li>
          </ul>
        </li>
        <li id="cover-letter-content">
          <?php
          $doc = new DOMDocument();
          $doc->loadHTML("".$coverLetter."");
          echo $doc->saveHTML();
          ?>
        </li>
      </ul>

      <ul id="education-container">
        <li>
          <ul class="item-list-title">
            <li><h3><i class="fas fa-graduation-cap"></i></h3></li>
            <li><h3>Education</h3></li>
          </ul>
        </li>
        @foreach($educations as $education)
          <li>
            <p>{{$education->institution}}</p>
            <p>{{$education->start_date}}-{{$education->end_date}}</p>
            <p>{{$education->name}}</p>
            <p>{{$education->gpa}}</p>
          </li>
        @endforeach
      </ul>

      <ul id="technical-container">
        <li>
          <ul class="item-list-title">
            <li><h3><i class="fas fa-folder-open"></i></h3></li>
            <li><h3>Technical</h3></li>
          </ul>
        </li>
        <li>
          <ul>
            @foreach($technicals as $technical)
              <li>
                <p>{{$technical->content}}</p>
              </li>
            @endforeach
          </ul>
        </li>
      </ul>

      <ul id="references-container">
        <li>
          <ul class="item-list-title">
            <li><h3><i class="fas fa-file-alt"></i></h3></li>
            <li><h3>References</h3></li>
          </ul>
        </li>
        @foreach($references as $reference)
        <ul class="reference-item-title"> <!-- Refer 1 -->
          <li>
            <p><u>{{$reference->name}}</u></p>
          </li>
          <li>
            <p>{{$reference->start_date}} - {{$reference->end_date}}</p>
          </li>
        </ul>
        <li>
          <p>{{$reference->description}}</p>
        </li>
        <li>
          <p>{{$reference->boss_title}}: {{$reference->boss_name}}</p>
        </li>
        <li>
          <p>{{$reference->address_name}}</p>
        </li>
        <li>
          <p>phone: {{$reference->phone_number}}</p>
        </li>
        <li>
          <p>email: {{$reference->email}}/p>
        </li>
        @endforeach
      </ul>

      <ul id="certificate-container">
        <li>
          <ul class="item-list-title">
            <li><h3><i class="fas fa-star"></i></h3></li>
            <li><h3>Certificates</h3></li>
          </ul>
        </li>
        <li>
          <ul>
            @foreach($certificates as $certificate)
              <li><p>{{$certificate->name}}</p></li>
              <li><a href="data:application/pdf;base64,<?php echo $certificate->file?>" width="70" height="38" type="application/pdf" alt="Red dot" download="{{$certificate->file_name}}">Download Document</a></li>
            @endforeach
          </ul>
        </li>
      </ul>

    </section>
  </div>

  <script src="{{asset('js/index.js')}}" type="text/javascript"></script>
  @include('partials/footer')
</body>
