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
            <li><p>Main object-oriented programming in Java and C++</p></li>
            <li><p>Network performance and security in mobile internet technology and network devices</p></li>
            <li><p>Network and System Administration</p></li>
            <li><p>Programming theory and practical experience in front-end and backend</p></li>
            <li><p>Main languages fluent in html5, CSS3, PHP, JavaScript, Java, C++ and C#</p></li>
            <li><p>WordPress and creating custom themes for a business requirements</p></li>
            <li><p>Operating System theory and software; Windows 7 and 10, Linux distributions Ubuntu and Debian</p></li>
            <li><p>Website frameworks Bootstrap 3 and Foundation 3</p></li>
            <li><p>Popular programming pre-processors and libraries; jquery, Sass, nodejs, node, angular and microsoft .NET Framework</p></li>
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
          <ul class="reference-item-title"> <!-- Refer 1 -->
            <li>
              <p><u>Kitchen Hand</u></p>
            </li>
            <li>
              <p>2012 - 2018</p>
            </li>
          </ul>
          <li>
            <p>My job as a kitchen hand was to prepare, cook and
            clean. The job requires effective communicate to staff
            members and also adaptive learning of new recipes.</p>
          </li>
          <li>
            <p>Manager: Terry Inglis</p>
          </li>
          <li>
            <p>Russell Tavern, Dalby QLD 4405</p>
          </li>
          <li>
            <p>phone: (07) 4662 2122</p>
          </li>
          <li>
            <p>email: russell.tavern@alhgroup.com.au</p>
          </li>
          <ul class="reference-item-title"> <!-- Refer 2 -->
            <li>
              <p>Kitchen Hand</p>
            </li>
            <li>
              <p>2012 - 2018</p>
            </li>
          </ul>
          <li>
            <p>My job was to complete various tasks such as inspection
            on-site location with the director and to analysis
            and collect information on different regional planning for
            Brisbane.</p>
          </li>
          <li>
            <p>Director: Lochlan Mummery</p>
          </li>
          <li>
            <p>Urban Strategies, South Brisbane QLD 4101</p>
          </li>
          <li>
            <p>Phone: (07) 3360 4200</p>
          </li>
          <li>
            <p>email: admin@urbanstrategies.com.au</p>
          </li>
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
            <li><p>Certificate 2 Information, Digital & Media and Technology</p></li>
            <li><p>Academic Award for Graphical Communications</p></li>
          </ul>
        </li>
      </ul>

    </section>
  </div>

  <script src="{{asset('js/index.js')}}" type="text/javascript"></script>
  @include('partials/footer')
</body>
