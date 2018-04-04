  @include('partials/header')
  <link href="{{asset('css/index.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/about.css')}}" type="text/css" rel="stylesheet" />
  <title>Angus Miller Portfolio - Resume</title>
</head>

<body>
  @include('partials/nav')

  <div id="container">
    @include('partials/quick_nav')
    @include('partials/about')

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
        <li id="cover-letter-content"><p>As a successfully completed student who studied Bachelor of Science (Computing)
              at USQ in Toowoomba, I am very interested in applying for the Junior
              Java Developer position. </p>

              <p>
              Currently, I have completed my 3rd and final year at USQ studying a Bachelor
              of Science (Computing). Other achievements include obtaining a Certificate
              II in Information Technology with an Award of Excellence for the
              highest achieving student.</p>

              <p>
              These studies have given me a range of theoretical and practical skills from
              Networking and System Administration to Software Development which will
              more than meet the needs for this role. I also have completed numerous
              projects which can be seen on GitHub. My name on Github is angusmiller28.</p>

              <p>
              My commitment to the IT field can be explained by my results and the following
              projects seen on my Github account and the ones at the end of this
              document. My final GPA is 5.25 with all 24 courses successfully completed.
              By viewing my projects on GitHub you will see my commitment passion
              attention to detail and dedication to learning across several different programming
              languages process and projects to advance my skills and give
              myself a challenge.</p>

              <p>
              While at school, I was a kitchen hand at the Russell Tavern. My responsibilities
              in this role included food preparation and cooking. This position has
              given me key employability skills while also allowing myself to experience
              working in a professional and fast-paced work environment. Furthermore,
              when I was in year 10 I undertook a week of work experience with Urban
              Strategies Brisbane. This experience has further developed my communication
              skills, teamwork and practical knowledge of what is expected in a
              professional work environment.</p>

              <p>
              Having worked in a team of 5 with our final University project, I have
              gained a lot of communication skills. Planning tasks and timing meetings
              provided challenges. Having to work around other team members commitments
              was a challenge that was resolved with communication and using
              messaging platforms.</p>

              <p>
              Throughout my study I have been challenged with many programming
              tasks. My final semester was to develop an e-commerce site that could be
              configured easily to a business needs.</p>
        </li>
      </ul>

      <ul id="education-container">
        <li>
          <ul class="item-list-title">
            <li><h3><i class="fas fa-graduation-cap"></i></h3></li>
            <li><h3>Education</h3></li>
          </ul>
        </li>
        <li><p>University of Southern Queensland
            S1 2015 - S2 2017 : Bachelor of
            Science (Computing) - GPA 5.25</p>
        </li>
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

    <script src="{{asset('js/index.js')}}" type="text/javascript"></script>
    @include('partials/footer')

  </div>
</body>
