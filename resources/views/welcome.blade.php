<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Angus Miller Portfolio - Resume</title>

            <link href="{{asset('css/css_reset.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('css/index.css')}}" type="text/css" rel="stylesheet" />
            <link href="{{asset('css/footer.css')}}" type="text/css" rel="stylesheet" />

            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1">
          </head>
          <body>
            <div id="container" >
              <nav id="nav-container">
                <div id="nav-bar-container">
                  <ul>
                    <li id="nav-bar-logo"><div id="logo">
                      <img src="img/logo" alt="logo" height="23.15px" width="62.9px" />
                    </div></li>
                  </ul>
                  <ul>
                    <li id="slogan"><div>
                      <h3>Web Designer & Developer</h3>
                    </div></li>
                  </ul>
                  <ul id="nav-bar-nav">
                    <li><a href="projects.php"><div class="pop nav-project"><i class="fas fa-folder-open"></i></div></a></li>
                    <li><a href="index.php"><div class="active"><i class="fas fa-user nav-index"></i></div></a></li>
                    <li><div class="nav-link active pop"  id="quick-nav-btn"><i class="fa fa-link"></i></div></li>
                    <li><a href=""><div class="nav-more pop"><i class="fas fa-bars"></i></div></a></li>
                  </ul>
                </div>

                <div id="quick-index-container">
                    <ul>
                        <ul>
                          <li><h3><i class="fa fa-link"></i> Quick Nav</h3></li>
                          <li id="close-quick-nav-btn" class="pop"><h3><i class="fa fa-window-close"></i></h3></li>
                        </ul>
                        <li class="quick-nav-link"><a href="#profile-container"><p>Profile</p></a></li>
                        <li class="quick-nav-link"><a href="#social-container"><p>Social</p></a></li>
                        <li class="quick-nav-link"><a href="#contact-container"><p>Contact</p></a></li>
                        <li class="quick-nav-link"><a href="#transcript-container"><p>Transcript link</p></a></li>
                        <li class="quick-nav-link"><a href="#cover-letter-container"><p>Cover letter</p></a></li>
                        <li class="quick-nav-link"><a href="#education-container"><p>Education</p></a></li>
                        <li class="quick-nav-link"><a href="#technical-container"><p>Technical</p></a></li>
                        <li class="quick-nav-link"><a href="#references-container"><p>References</p></a></li>
                        <li class="quick-nav-link"><a href="#certificate-container"><p>Certificates</p></a></li>
                    </ul>
                </div>

                <section id="nav-wrapper">

                  <div id="profile-icon">
                    <img src="img/profile_pic.png" alt="" height="156px" width="156px" />
                  </div>

                  <div id="profile-container">
                    <ul class="item-list-title">
                      <li><h3><i class="fas fa-user-circle"></i></h3></li>
                      <li><h3>Profile</h3></li>
                    </ul>
                    <p id="profile-content">
                      Hi my name is Angus Miller. I have just successfully completed my study of
                      Bachelor of Science Computing. Having gained a firm experience in a wide
                      variety of IT fields such as Networking, Security, Programming, Database theory and Business System Analysis and design. I have the passion, commitment
                      and skills to target the requirement of your organisation.
                    </p>
                  </div>

                  <hr />

                  <div id="social-container">
                    <ul class="item-list-title">
                      <li><h3><i class="fas fa-address-card"></i></h3></li>
                      <li><h3>Social</h3></li>
                    </ul>
                    <ul id="social-items">
                      <ul>
                        <li><p><i class="fab fa-linkedin"></i></p></li>
                        <li><a href=""><p>Angus Miller</p></a></li>
                      </ul>
                      <ul>
                        <li><p><i class="fab fa-facebook-square"></i></p></li>
                        <li><a href=""><p>Angus Miller</p></a></li>
                      </ul>
                      <ul>
                        <li><p><i class="fab fa-github"></i></p></li>
                        <li><a href=""><p>angusmiller28</p></a></li>
                      </ul>
                    </ul>
                  </div>

                  <hr />

                  <div id="contact-container">
                    <ul class="item-list-title">
                      <li><h3><i class="fas fa-address-book"></i></h3></li>
                      <li><h3>Contact</h3></li>
                    </ul>
                    <ul id="contact-items">
                      <ul>
                        <li><p><i class="fas fa-envelope"></i></p></li>
                        <li><p>angus.miller28@gmail.com</p></li>
                      </ul>
                      <ul>
                        <li><p><i class="fas fa-map"></i></p></li>
                        <li><div><p>128 Vulture St, South Brisbane Queensland 4101</p></div></li>
                      </ul>
                      <ul>
                        <li><p><i class="fas fa-phone"></i></p></li>
                        <li><p>0423 584 163</p></li>
                      </ul>
                    </ul>
                  </div>

                  <hr />

                  <div id="transcript-container">
                    <ul class="item-list-title">
                      <li><h3><i class="fas fa-clipboard-list"></i></h3></li>
                      <li><h3>Transcript link</h3></li>
                    </ul>
                    <div><p><a href="">https/tinyurl.com/yd86u68g</a></p></div>
                  </div>

                  <div id="nav-footer">
                    <p>Made with love by Angus Miller 2018</p>
                  </div>
                </section>
              </nav>

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
                      <li><h3><i class="fas fa-address-book"></i></h3></li>
                      <li><h3>Cover Letter</h3></li>
                      <li><h3><i id="cover-letter-btn"class="fas fa-arrow-circle-down"></i></h3></li>
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
                      <li><h3><i class="fas fa-address-book"></i></h3></li>
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
                        <p>Kitchen Hand</p>
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

              @include('partials/footer');

            </div>
            <script src="{{asset('js/nav.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/quick-nav.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
          </body>
        </html>
