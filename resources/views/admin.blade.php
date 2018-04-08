  @include('partials/header')
  <title>Angus Miller Portfolio - Projects</title>

  <link href="{{asset('css/admin.css')}}" type="text/css" rel="stylesheet" />

  <script src="{{asset('js/editor.js')}}" type="text/javascript"></script>

  <!-- Main Quill library -->
  <script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <!-- Theme included stylesheets -->
  <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
  <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

  <!-- Core build with no theme, formatting, non-essential modules -->
  <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
  <script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>

  <!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

</head>
<body>
  @include('partials/nav')
  @include('partials/quick_nav')

  <div id="container" >
    <!-- RESUME FORM -->
    <div id="resume-form-container">
      @if($resumeSet)
        <h3>Update Resume</h3>
        {!! Form::open(['action' => 'ResumeController@store', 'method' => 'POST', 'files' => true]) !!}
        @csrf
        @foreach($resumes as $resume)
          {{Form::text('resume_id', $resume->resume_id, ['class' => 'form-control'])}}
          <div class="form-group">
              {{Form::label('description', 'Resume description')}}
              {{Form::textarea('description', $resume->description, ['class' => 'form-control'])}}
          </div>
          <div class="form-group">
            <ul>
              <li class="form-group-title"><p>Contact on social media</b></li>
              <li>
                <i class="fab fa-facebook-square"></i>
                {{Form::label('facebook_link', 'Facebook')}}
              </li>
              <li>
                {{Form::label('facebook_name', 'Name')}}
                {{Form::text('facebook_name', $resume->facebook_name, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('facebook_link', 'Link')}}
                {{Form::text('facebook_link', $resume->facebook_link, ['class' => 'form-control'])}}
              </li>
              <li>
                <i class="fab fa-twitter-square"></i>
                {{Form::label('twitter_link', 'Twitter')}}
              </li>
              <li>
                {{Form::label('twitter_name', 'Name')}}
                {{Form::text('twitter_name', $resume->twitter_name, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('twitter_link', 'Link')}}
                {{Form::text('twitter_link', $resume->twitter_link, ['class' => 'form-control'])}}
              </li>
              <li>
                <i class="fab fa-google-plus-square"></i>
                {{Form::label('google_link', 'Google')}}
              </li>
              <li>
                {{Form::label('google_name', 'Name')}}
                {{Form::text('google_name', $resume->google_name, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('google_link', 'Link')}}
                {{Form::text('google_link', $resume->google_link, ['class' => 'form-control'])}}
              </li>
              <li>
                <i class="fab fa-reddit-square"></i>
                {{Form::label('reddit_link', 'Reddit')}}
              </li>
              <li>
                {{Form::label('reddit_name', 'Name')}}
                {{Form::text('reddit_name', $resume->reddit_name, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('reddit_link', 'Link')}}
                {{Form::text('reddit_link', $resume->reddit_link, ['class' => 'form-control'])}}
              </li>
              <li>
                <i class="fab fa-linkedin"></i>
                {{Form::label('linkedin_link', 'Linkedin')}}
              </li>
              <li>
                {{Form::label('linkedin_name', 'Name')}}
                {{Form::text('linkedin_name', $resume->linkedin_name, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('linkedin_link', 'Link')}}
                {{Form::text('linkedin_link', $resume->linkedin_link, ['class' => 'form-control'])}}
              </li>
              <li>
                <i class="fab fa-github-square"></i>
                {{Form::label('github_link', 'GitHub Link')}}
              </li>
              <li>
                {{Form::label('github_name', 'Name')}}
                {{Form::text('github_name', $resume->github_name, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('github_link', 'Link')}}
                {{Form::text('github_link', $resume->github_link, ['class' => 'form-control'])}}
              </li>
            </ul>
          </div>
          <div class="form-group">
            <ul>
              <li class="form-group-title"><p>Contact</p></li>
              <li>
                {{Form::label('email', 'Email')}}
                {{Form::text('email', $resume->email, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('address', 'Address')}}
                {{Form::text('address', $resume->address, ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone', $resume->phone, ['class' => 'form-control'])}}
              </li>
            </ul>
          </div>
          <div class="form-group">
            <ul>
              <li>
                {{Form::label('transcript', 'Transcript link')}}
                {{Form::text('transcript', $resume->transcript, ['class' => 'form-control'])}}
              </li>
            </ul>
          </div>
          <div class="form-group">
            <ul>
              <li>
                {{Form::label('cover-letter', 'Cover Letter')}}
                {{Form::textarea('cover-letter', $resume->cover_letter, ['class' => 'form-control'])}}
              </li>
            </ul>
          </div>
          <div class="form-group">
            <ul>
              <li>
              {{Form::label('educationName', 'Education Name')}}
              {{Form::text('educationName', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('educationStartDate', 'Education Start Date')}}
              {{Form::text('educationStartDate', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('educationEndDate', 'Education End Date')}}
              {{Form::text('educationEndDate', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('educationInstitution', 'Education Institution')}}
              {{Form::text('educationInstitution', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('educationGpa', 'Education GPA')}}
              {{Form::text('educationGpa', '', ['class' => 'form-control'])}}
              </li>
              <li>
                <i id="education-add" class="fas fa-plus-circle"></i>
                <ul id="education-list">
                  @foreach($educations as $education)
                    <ul id="education-{{$education->education_id}}">

                    <li>Education Name: {{$education->name}}</li>
                    <li>Education Start Date: {{$education->start_date}}</li>
                    <li>Education End Date: {{$education->end_date}}</li>
                    <li>Education Institutione: {{$education->institution}}</li>
                    <li>Education GPA: {{$education->gpa}}</li>
                    <li><button id="{{$education->education_id}}" class="delete-education" type="button" name="button">Delete Education</button></li>
                    </ul>
                  @endforeach
                </ul>
                <ul class="delete-education-list">
                </ul>
              </li>
            <ul>
          </div>
          <div class="form-group">
            <ul>
              <li>
              {{Form::label('technical', 'Technical')}}
              {{Form::text('technicalContent', '', ['id' => 'technicalContent', 'class' => 'form-control'])}}
              </li>
              <li>
                <i id="technical-add" class="fas fa-plus-circle"></i>
                <ul id="technical-list">
                  @foreach($technicals as $technical)
                    <ul id="technical-{{$technical->technical_id}}">

                    <li>Technical Content: {{$technical->content}}</li>
                    <li><button id="{{$technical->technical_id}}" class="delete-technical" type="button" name="button">Delete Technical</button></li>
                    </ul>
                  @endforeach
                </ul>
                <ul class="delete-technical-list">
                </ul>
              </li>
          </div>
          <div class="form-group">
            <ul>
              <li>
              {{Form::label('referenceTitle', 'Reference')}}
              {{Form::text('referenceTitle', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('referenceStartDate', 'Reference start date')}}
              {{Form::text('referenceStartDate', '', ['class' => 'form-control'])}}
              </li>
              {{Form::label('referenceEndDate', 'Reference end date')}}
              {{Form::text('referenceEndDate', '', ['class' => 'form-control'])}}
              <li>
              {{Form::label('referenceDescription', 'Reference description')}}
              {{Form::textarea('referenceDescription', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('referenceBossTitle', 'Reference boss title')}}
              {{Form::text('referenceBossTitle', '', ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('referenceBossName', 'Reference boss name')}}
                {{Form::text('referenceBossName', '', ['class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('referenceAddress', 'Reference address name')}}
                {{Form::text('referenceAddress', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('referencePhoneNumber', 'Reference phone number')}}
              {{Form::text('referencePhoneNumber', '', ['class' => 'form-control'])}}
              </li>
              <li>
              {{Form::label('referenceEmail', 'Reference email')}}
              {{Form::text('referenceEmail', '', ['class' => 'form-control'])}}
              </li>
              <li>
              <i id="reference-add" class="fas fa-plus-circle"></i>
              <ul id="reference-list">
                @foreach($references as $reference)
                  <ul id="reference-{{$reference->reference_id}}">

                  <li>Reference Name: {{$reference->name}}</li>
                  <li>Reference Start Date: {{$reference->start_date}}</li>
                  <li>Reference End Date: {{$reference->end_date}}</li>
                  <li>Reference Description: {{$reference->description}}</li>
                  <li>Reference Boss Title: {{$reference->boss_title}}</li>
                  <li>Reference Boss Name: {{$reference->boss_name}}</li>
                  <li>Reference Address Name: {{$reference->address_name}}</li>
                  <li>Reference Phone Number: {{$reference->phone_number}}</li>
                  <li>Reference Email: {{$reference->email}}</li>
                  <li><button id="{{$reference->reference_id}}" class="delete-reference" type="button" name="button">Delete Reference</button></li>
                  </ul>
                @endforeach
              </ul>
              <ul class="delete-reference-list">
              </ul>
              </li>
            </ul>
          </div>
          <div class="form-group">
            <ul>
              <li>
                {{Form::label('certificateName', 'Certificate')}}
                {{Form::text('certificateName', '', ['id' => 'certificateName', 'class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('certificateFileName', 'Certificate File Name')}}
                {{Form::text('certificateFileName', '', ['id' => 'certificateFileName', 'class' => 'form-control'])}}
              </li>
              <li>
                {{Form::label('certificateFile', 'Certificate File')}}
                {{Form::file('certificateFile', ['id' => 'certificateFile', 'class' => 'form-control', 'accept' => 'application/pdf'])}}</li>
              <li>
                <i id="certificate-add" class="fas fa-plus-circle"></i>
                <ul id="certificate-list">
                  @foreach($certificates as $certificate)
                    <ul id="certificate-{{$certificate->certificate_id}}">

                    <li>Certificate Name: {{$certificate->name}}</li>
                    <li>Certificate Document: <a href="data:application/pdf;base64,<?php echo $certificate->file?>" width="70" height="38" type="application/pdf" alt="Red dot" download="{{$certificate->file_name}}">Link</a></li>
                    <li><button id="{{$certificate->certificate_id}}" class="delete-certificate" type="button" name="button">Delete Certificate</button></li>
                    </ul>
                  @endforeach
                </ul>
                <ul class="delete-certificate-list">
                </ul>
              </li>
            </ul>
          </div>
        @endforeach
      @else
        <h3>Add Resume</h3>
        {!! Form::open(['action' => 'ResumeController@store', 'method' => 'POST', 'files' => true]) !!}
        @csrf
        {{Form::text('resume_id', '', ['class' => 'form-control'])}}
        <div class="form-group">
            {{Form::label('description', 'Resume description')}}
            {{Form::textarea('description', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          <ul>
            <li class="form-group-title"><p>Contact on social media</b></li>
            <li>
              <i class="fab fa-facebook-square"></i>
              {{Form::label('facebook_link', 'Facebook')}}
              {{Form::text('facebook_link', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i class="fab fa-twitter-square"></i>
              {{Form::label('twitter_link', 'Twitter')}}
              {{Form::text('twitter_link', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i class="fab fa-google-plus-square"></i>
              {{Form::label('google_link', 'Google')}}
              {{Form::text('google_link', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i class="fab fa-reddit-square"></i>
              {{Form::label('reddit_link', 'Reddit')}}
              {{Form::text('reddit_link', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i class="fab fa-linkedin"></i>
              {{Form::label('linkedin_link', 'Linkedin')}}
              {{Form::text('linkedin_link', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i class="fab fa-github-square"></i>
              {{Form::label('github_link', 'GitHub')}}
              {{Form::text('github_link', '', ['class' => 'form-control'])}}
            </li>
          </ul>
        </div>
        <div class="form-group">
          <ul>
            <li class="form-group-title"><p>Contact</p></li>
            <li>
              {{Form::label('email', 'Email')}}
              {{Form::text('email', '', ['class' => 'form-control'])}}
            </li>
            <li>
              {{Form::label('address', 'Address')}}
              {{Form::text('address', '', ['class' => 'form-control'])}}
            </li>
            <li>
              {{Form::label('phone', 'Phone')}}
              {{Form::text('phone', '', ['class' => 'form-control'])}}
            </li>
          </ul>
        </div>
        <div class="form-group">
          <ul>
            <li>
              {{Form::label('transcript', 'Transcript link')}}
              {{Form::text('transcript', '', ['class' => 'form-control'])}}
            </li>
          </ul>
        </div>
        <div class="form-group">
          <ul>
            <li>
              {{Form::label('cover-letter', 'Cover Letter')}}
              {{Form::textarea('cover-letter', '', ['class' => 'form-control'])}}
            </li>
          </ul>
        </div>
        <div class="form-group">
          <ul>
            <li>
            {{Form::label('education', 'Education')}}
            {{Form::text('education', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i id="education-add" class="fas fa-plus-circle"></i>
              <ul id="education-list"></ul>
            </li>
          <ul>
        </div>
        <div class="form-group">
          <ul>
            <li>
            {{Form::label('technical', 'Technical')}}
            {{Form::text('technical', '', ['class' => 'form-control'])}}
            </li>
            <li>
              <i id="technical-add" class="fas fa-plus-circle"></i>
              <ul id="technical-list"></ul>
            </li>
        </div>
        <div class="form-group">
          <ul>
            <li>
            {{Form::label('referenceTitle', 'Reference')}}
            {{Form::text('referenceTitle', '', ['class' => 'form-control'])}}
            </li>
            <li>
            {{Form::label('referenceStartDate', 'Reference start date')}}
            {{Form::text('referenceStartDate', '', ['class' => 'form-control'])}}
            </li>
            {{Form::label('referenceEndDate', 'Reference end date')}}
            {{Form::text('referenceEndDate', '', ['class' => 'form-control'])}}
            <li>
            {{Form::label('referenceDescription', 'Reference description')}}
            {{Form::textarea('referenceDescription', '', ['class' => 'form-control'])}}
            </li>
            <li>
            {{Form::label('referenceBossTitle', 'Reference boss title')}}
            {{Form::text('referenceBossTitle', '', ['class' => 'form-control'])}}
            </li>
            <li>
              {{Form::label('referenceBossName', 'Reference boss name')}}
              {{Form::text('referenceBossName', '', ['class' => 'form-control'])}}
            </li>
            <li>
              {{Form::label('referenceAddress', 'Reference address name')}}
              {{Form::text('referenceAddress', '', ['class' => 'form-control'])}}
            </li>
            <li>
            {{Form::label('referencePhoneNumber', 'Reference phone number')}}
            {{Form::text('referencePhoneNumber', '', ['class' => 'form-control'])}}
            </li>
            <li>
            {{Form::label('referenceEmail', 'Reference email')}}
            {{Form::text('referenceEmail', '', ['class' => 'form-control'])}}
            </li>
            <li>
            <i id="reference-add" class="fas fa-plus-circle"></i>
            <ul id="reference-list"></ul>
            </li>
          </ul>
        </div>
        <div class="form-group">
          <ul>
            <li>
              {{Form::label('certificate', 'Certificate')}}
              {{Form::text('certificate', '', ['class' => 'form-control'])}}
            </li>
            <li>{{Form::file('coverImage', ['class' => 'form-control', 'accept' => 'image/png'])}}</li>
            <li>
              <i id="certificate-add" class="fas fa-plus-circle"></i>
              <ul id="certificate-list"></ul>
            </li>
          </ul>
        </div>
      @endif


        {{Form::submit('Submit', ['class'=>'btn btn-default'])}}
      {!! Form::close() !!}
    </div>
    <!-- END::RESUME FORM -->

    <!-- PROJECT FORM -->
    <div id="project-form-container">
      <h3>Add Project</h3>
      {!! Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
          <ul>
            <li>
              {{Form::label('name', 'Name')}}
              {{Form::text('name', '', ['class' => 'form-control'])}}
            </li>
          </ul>
        </div>
        <div class="form-group">
          {{Form::label('subTitle', 'Subtitle')}}
          {{Form::text('subTitle', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('toolsName', 'Tool Name')}}
          {{Form::text('toolsName', '', ['class' => 'form-control'])}}
          {{Form::label('toolsLink', 'Tool link')}}
          {{Form::text('toolsLink', '', ['class' => 'form-control'])}}
          <i id="tools-add" class="fas fa-plus-circle"></i>
          <ul id="tools-list"></ul>
        </div>
        <div class="form-group">
          {{Form::label('socialsName', 'Social Name')}}
          {{Form::text('socialsName', '', ['class' => 'form-control'])}}
          {{Form::label('socialsLink', 'Social link')}}
          {{Form::text('socialsLink', '', ['class' => 'form-control'])}}
          <i id="socials-add" class="fas fa-plus-circle"></i>
          <ul id="socials-list"></ul>
        </div>
        <div class="form-group">
          {{Form::label('description', 'Description')}}
          {{Form::textarea('description', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('coverImage', 'Cover Image')}}
            {{Form::file('coverImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'coverImage'])}}
            {{HTML::image('', '', ['ng-src' => '<% coverImage %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('displayImageFront', 'Display Image Front')}}
          {{Form::file('displayImageFront', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'displayImageFront'])}}
          {{HTML::image('', '', ['ng-src' => '<% displayImageFront %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('displayImageBack', 'Display Image Back')}}
          {{Form::file('displayImageBack', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'displayImageBack'])}}
          {{HTML::image('', '', ['ng-src' => '<% displayImageBack %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('mobileImage', 'Mobile Image')}}
          {{Form::file('mobileImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'mobileImage'])}}
          {{HTML::image('', '', ['ng-src' => '<% mobileImage %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('tabletImage', 'Tablet Image')}}
          {{Form::file('tabletImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'tabletImage'])}}
          {{HTML::image('', '', ['ng-src' => '<% tabletImage %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('desktopImage', 'Desktop Image')}}
          {{Form::file('desktopImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'desktopImage'])}}
          {{HTML::image('', '', ['ng-src' => '<% desktopImage %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('video', 'Video')}}
          {{Form::file('video', ['class' => 'form-control', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'desktopImage'])}}

        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-default'])}}
      {!! Form::close() !!}
    </div><!-- END::PROJECT FORM --><!-- END::PROJECT FORM -->

    <!-- BLOG FORM -->
    <div id="blog-form-container">
      <h3>Add Blog</h3>
      {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group">
          {{Form::label('name', 'Name')}}
          {{Form::text('name', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('coverImage', 'Cover Image')}}
            {{Form::file('coverImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'coverImageBlog'])}}
            {{HTML::image('', '', ['ng-src' => '<% coverImageBlog %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div class="form-group">
          {{Form::label('displayImage', 'Display Image')}}
            {{Form::file('displayImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'displayImageBlog'])}}
            {{HTML::image('', '', ['ng-src' => '<% displayImageBlog %>', 'width' => '300', 'id' => 'myFile'])}}
        </div>
        <div id="share-social-media-container" class="form-group">
          <ul>
            <li><label>
              Share on social media
            </label></li>
            <li>
              <i class="fab fa-facebook-square"></i>
              {{Form::label('Facebook', 'facebook')}}
              {{Form::checkbox('Facebook', 'facebook')}}
            </li>
            <li>
              <i class="fab fa-twitter-square"></i>
              {{Form::label('Twitter', 'twitter')}}
              {{Form::checkbox('Twitter', 'twitter')}}
            </li>
            <li>
              <i class="fab fa-google-plus-square"></i>
              {{Form::label('Google+', 'google')}}
              {{Form::checkbox('Google+', 'google')}}
            </li>
            <li>
              <i class="fab fa-reddit-square"></i>
              {{Form::label('Reddit', 'reddit')}}
              {{Form::checkbox('Reddit', 'reddit')}}
            </li>
            <li>
              <i class="fa fa-envelope-square"></i>
              {{Form::label('Email', 'email')}}
              {{Form::checkbox('Email', 'email')}}
            </li>
            <li>
            {{Form::label('blogLead', 'Blog lead')}}
            {{Form::textarea('blogLead', '', ['class' => 'form-control'])}}
            </li>
          </ul>
        </div>
        <div id="colour-picker-container" class="form-group" >
          {{Form::label('themeColour', 'Theme colour')}}
          <input id="color-picker" type="color" name="themeColour" value="#ff0000">
        </div>
        <div class="form-group">

          <!-- Create the editor container -->
          <div id="editor" style="height: 375px;" >

          </div>

        </div>



        <button id="getData" type="button" name="button" onClick="submitBlogContent()">Extract data</button>
        <input id="blog-content" type="text" name="blog-content" value="">

        {{Form::submit('Submit', ['id' => 'submit-blog', 'class'=>'btn btn-default', 'onClick' => 'submitBlogContent()'])}}

      {!! Form::close() !!}
    </div> <!-- END::BLOG FORM -->

    <!-- ADD ADMIN FORM -->
    <div id="admin-form-container">
      <h3>Add Staff</h3>
        {!! Form::open(['action' => 'Auth\AdminRegisterController@store', 'method' => 'POST', 'files' => true]) !!}
        @csrf
        <div class="form-group">
          {{Form::label('name', 'Name')}}
          {{Form::text('name', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('email', 'Email')}}
          {{Form::text('email', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('job_title', 'Job title')}}
          {{Form::text('job_title', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('password', 'Password')}}
          {{Form::text('password', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
          {{Form::label('password_confirmation', 'Confirm password')}}
          {{Form::text('password_confirmation', '', ['class' => 'form-control'])}}
        </div>

        {{Form::submit('Submit', ['id' => 'submit-blog', 'class'=>'btn btn-primary'])}}

      {!! Form::close() !!}
    </div>
    <!-- END::ADMIN FORM -->

    <!-- BLOG GALLERY -->
    <div id="blog-gallery-container" >
      <ul>
        <li><h3>Blogs</h3></li>
        <ul class="cards">
        @foreach($blogs as $blog)
        <li>
          <div class="card card-small"><a href="blogs/blog/<?php echo $blog->blog_id ?>">
          <img src="data:image/png;base64,<?php echo $blog->cover_image?>" /></a>
          {{ Form::open(array('url' => 'blogs/' . $blog->blog_id)) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
          {{ Form::close() }}
          </div>
        </li>
        @endforeach
        </ul>
      </ul>
    </div><!-- END::BLOG GALLERY -->

    <!-- PROJECTS GALLERY -->
    <div id="project-gallery-container" class="cards">
      <ul>
        <li><h3>Projects</h3></li>
        <ul class="cards">
        @foreach($projects as $project)
          <li>
            <div class="card card-small"><a href="projects/project/<?php echo $project->project_id ?>">
            <img src="data:image/png;base64,<?php echo $project->cover_image?>" /></a>
            {{ Form::open(array('url' => 'projects/' . $project->project_id, 'class' => 'pull-right')) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}
            </div>
          </li>
        @endforeach
        </ul>
      </ul>
    </div><!-- END::PROJECTS GALLERY -->

    <!-- USERS GALLERY -->
    <div id="user-gallery-container" class="cards">
      <ul>
        <li><h3>Users</h3></li>
        @foreach($users as $user)
        <div class="card">
          <li>
            <div class="card card-small">
              <a href="users/user/<?php echo $user->id ?>">
              <img src="/uploads/avatars/{{$user->avatar}}" alt="" style="width: 50px; height: 50px; border-radius: 50%"></a>
              <p>{{ $user->name }}</p>
              {{ Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
              {{ Form::close() }}
            </div>
          </li>
        </div>
        @endforeach
      <ul>
    </div><!-- END::USERS GALLERY -->

    <!-- ADMINS GALLERY -->
    <div id="admin-gallery-container" class="cards">
      <ul>
        <li><h3>Admins</h3></li>
        @foreach($admins as $admin)
        <div class="card">
          <li>
            <div class="card card-small">
              <a href="/admin/profile/<?php echo $admin->id ?>">
              <img src="/uploads/avatars/{{$admin->avatar}}" alt="" style="width: 50px; height: 50px; border-radius: 50%"></a>
              <p>{{ $admin->name }}</p>
              {{ Form::open(array('url' => '/admin/profile/' . $admin->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
              {{ Form::close() }}
            </div>
          </li>
        </div>
        @endforeach
      <ul>
    </div><!-- END::ADMINS GALLERY -->

    @include('partials/footer')
  </div>


  <style>
      .active {
        color: blue;
      }
     .btn-success {
       background-color: white;
       color: black;
     }

     .btn-success:hover, .btn-success:hover i {
       color: blue;
     }

     .btn-success i {
        color: black;
      }

     .btn-error {
       background-color: red;
     }
     .btn-error i {
        color: black;
      }

     .buttons {
       display: flex;
       flex-direction: row;
       flex-wrap: wrap;
     }
     .btn {
       padding: 10px;
       margin: 5px;
       width: auto !important;
       height: 20px;
     }
     .buttons>div {

     }
    .editable {
      width: 300px;
      height: 200px;
      border: 1px solid #ccc;
      padding: 5px;
      background-color: white;
    }

  </style>
  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <!-- Initialize Quill editor -->
  <script>

  var quill = new Quill('#editor', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', 'code-block']
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow',  // or 'bubble'



});

function submitBlogContent() //display current HTML
{
  var html = quill.root.innerHTML;
  alert(html);
  document.getElementById('blog-content').value=html;
}

</script>
<script>

</script>


</body>
