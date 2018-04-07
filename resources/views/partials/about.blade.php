<section id="about-wrapper">
  <div id="profile-icon">
    <img src="img/profile_pic.png" alt="" height="156px" width="156px" />
  </div>

  <div id="profile-container">
    <ul class="item-list-title">
      <li><h3><i class="fas fa-user-circle"></i>Profile</h3></li>
    </ul>
    <p id="profile-content">
      {{$description}}
    </p>
  </div>

  <hr />

  <div id="social-container">
    <ul class="item-list-title">
      <li><h3><i class="fas fa-address-card"></i>Social</h3></li>
    </ul>
    <ul id="social-items">
      @if (isset($linkedinLink))
      <ul>
        <li><p><i id="social-linkedin-icon" class="fab fa-linkedin"></i></p></li>
        <li><a href="{{$linkedinLink}}"><p>Angus Miller</p></a></li>
      </ul>
      @endif
      @if (isset($facebookLink))
      <ul>
        <li><p><i id="social-facebook-icon" class="fab fa-facebook-square"></i></p></li>
        <li><a href="{{$facebookLink}}"><p>{{$facebookName}}</p></a></li>
      </ul>
      @endif
      @if (isset($githubLink))
      <ul>
        <li><p><i id="social-github-icon" class="fab fa-github"></i></p></li>
        <li><a href="{{$githubLink}}"><p>{{$githubName}}</p></a></li>
      </ul>
      @endif
      @if (isset($twitterLink))
      <ul>
        <li><p><i id="social-twitter-icon" class="fab fa-twitter-square"></i></p></li>
        <li><a href="{{$twitterLink}}"><p>{{$twitterName}}</p></a></li>
      </ul>
      @endif
      @if (isset($googleLink))
      <ul>
        <li><p><i id="social-google-icon" class="fab fa-google-plus-square"></i></p></li>
        <li><a href="{{$googleLink}}"><p>{{$googleName}}</p></a></li>
      </ul>
      @endif
      @if (isset($redditLink))
      <ul>
        <li><p><i id="social-reddit-icon" class="fab fa-reddit-square"></i></p></li>
        <li><a href="{{$redditLink}}"><p>{{$redditName}}</p></a></li>
      </ul>
      @endif
    </ul>
  </div>

  <hr />

  <div id="contact-container">
    <ul class="item-list-title">
      <li><h3><i class="fas fa-address-book"></i>Contact</h3></li>
    </ul>
    <ul id="contact-items">
      <ul>
        <li><p><i id="contact-address-icon" class="fas fa-envelope"></i></p></li>
        <li><p>{{$email}}</p></li>
      </ul>
      <ul>
        <li><p><i id="contact-map-icon" class="fas fa-map"></i></p></li>
        <li><div><p>{{$address}}</p></div></li>
      </ul>
      <ul>
        <li><p><i id="contact-phone-icon" class="fas fa-phone"></i></p></li>
        <li><p>{{$phoneNumber}}</p></li>
      </ul>
    </ul>
  </div>

  <hr />

  <div id="transcript-container">
    <ul class="item-list-title">
      <li><h3><i class="fas fa-clipboard-list"></i>Transcript link</h3></li>
    </ul>
    <div><p><a href="{{$transcriptLink}}">{{$transcriptLink}}</a></p></div>
  </div>

  <div id="nav-footer">
    <p>Made with love by Angus Miller 2018</p>
  </div>
</section>
