  @include('partials/header')
  <title>Angus Miller Portfolio - Projects</title>

  <link href="{{asset('css/admin.css')}}" type="text/css" rel="stylesheet" />

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
          </ul>
        </div>
        <div class="form-group">
          </div>
          <div class="col-md-12 tags buttons">
          {{Form::label('Text', 'text')}}
          <section id="editor" class="editable"></section>

          <input id="editor-data" type="text" name="editor-data">
        </div>

        <div id="colour-picker-container">
          <input id="color-picker" type="color" name="favcolor" value="#ff0000">
        </div>

        <div id="editor" class="row" style="width: 300px; height: 200px; background: white" contentEditable="true">asda</div>
        <button id="getData" type="button" name="button">Extract data</button>
        <input id="blog-content" type="text" name="blog-content" value="">

        {{Form::submit('Submit', ['id' => 'submit-blog', 'class'=>'btn btn-default'])}}

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
  <script src="{{asset('js/admin.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery-fieldselection.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
  var commands = [{
  	"cmd": "backColor",
  	"val": "red",
    "icon": "flask",
  	"desc": "Changes the document background color. In styleWithCss mode, it affects the background color of the containing block instead. This requires a color value string to be passed in as a value argument. (Internet Explorer uses this to set text background color.)"
  },
  {
	"cmd": "foreColor",
	"val": "rgba(0,0,0,.5)",
  "icon": "tint",
	"desc": "Changes a font color for the selection or at the insertion point. This requires a color value string to be passed in as a value argument."
  },
  {
  	"cmd": "heading",
  	"val": "h3",
  	"icon": "heading",
  	"desc": "Adds a heading tag around a selection or insertion point line. Requires the tag-name string to be passed in as a value argument (i.e. \"H1\", \"H6\"). (Not supported by Internet Explorer and Safari.)"
  },
  {
	"cmd": "fontName",
  "icon": "font",
	"val": "'Inconsolata', monospace",
	"desc": "Changes the font name for the selection or at the insertion point. This requires a font name string (\"Arial\" for example) to be passed in as a value argument."
  },
  {
  "cmd": "createLink",
  "val": "https://twitter.com/netsi1964",
  "icon": "link",
  "desc": "Creates an anchor link from the selection, only if there is a selection. This requires the HREF URI string to be passed in as a value argument. The URI must contain at least a single character, which may be a white space. (Internet Explorer will create a link with a null URI value.)"
  },
  {
  "cmd": "bold",
  "icon": "bold",
  "desc": "Toggles bold on/off for the selection or at the insertion point. (Internet Explorer uses the STRONG tag instead of B.)"
  },
  {
  "cmd": "insertOrderedList",
  "icon": "list-ol",
  "desc": "Creates a numbered ordered list for the selection or at the insertion point."
  },
  {
  "cmd": "insertUnorderedList",
  "icon": "list-ul",
  "desc": "Creates a bulleted unordered list for the selection or at the insertion point."
  },
  {
  "cmd": "insertParagraph",
  "icon": "paragraph",
  "desc": "Inserts a paragraph around the selection or the current line. (Internet Explorer inserts a paragraph at the insertion point and deletes the selection.)"
  },
  {
  "cmd": "underline",
  "icon": "underline",
  "desc": "Toggles underline on/off for the selection or at the insertion point."
  },
  {
  "cmd": "createLink",
  "val": "https://twitter.com/netsi1964",
  "icon": "link",
  "desc": "Creates an anchor link from the selection, only if there is a selection. This requires the HREF URI string to be passed in as a value argument. The URI must contain at least a single character, which may be a white space. (Internet Explorer will create a link with a null URI value.)"
  },
  {
  "cmd": "unlink",
  "icon": "unlink",
  "desc": "Removes the anchor tag from a selected anchor link."
  },
  {
  "cmd": "strikeThrough",
  "icon": "strikethrough",
  "desc": "Toggles strikethrough on/off for the selection or at the insertion point."
  },
  {
  "cmd": "subscript",
  "icon": "subscript",
  "desc": "Toggles subscript on/off for the selection or at the insertion point."
  },
  {
  "cmd": "superscript",
  "icon": "superscript",
  "desc": "Toggles superscript on/off for the selection or at the insertion point."
  },
  {
  "cmd": "removeFormat",
  "icon": "undo",
  "desc": "Removes all formatting from the current selection."
  }];

  function doCommand(cmdKey) {
  	var cmd = commandRelation[cmdKey];
  	if (supported(cmd) === "btn-error") {
  		alert("execCommand(“" + cmd.cmd + "”)\nis not supported in your browser");
  		return;
  	}
    // if colour command use value from color-picker
    if(cmd.cmd == "foreColor")
      cmd.val = $("#color-picker").val();

    val = (typeof cmd.val !== "undefined") ? prompt("Value for " + cmd.cmd + "?", cmd.val) : "";

    if(cmd.cmd == "insertParagraph"){
      document.execCommand('insertHtml',false,'<p></p>');
      return true;
    }

    document.execCommand(cmd.cmd, false, (val || "")); // Thanks to https://codepen.io/bluestreak for finding this bug
  }

  var commandRelation = {};

  function supported(cmd) {
  	var css = !!document.queryCommandSupported(cmd.cmd) ? "btn-success" : "btn-error"
  	return css
  };

  function icon(cmd) {
  	return (typeof cmd.icon !== "undefined") ? "fa fa-" + cmd.icon : "";
  };

  function init() {
  	var html = '',
  		// template = '<span><code class="btn btn-xs %btnClass%" title="%desc%" onmousedown="event.preventDefault();" onclick="doCommand(\'%cmd%\')"><i class="%iconClass%"></i> %cmd%</code></span>';
      template = '<div id="%btnId%" class="btn btn-xs %btnClass%" title="%desc%" onmousedown="event.preventDefault();" onclick="doCommand(\'%cmd%\')"><i id="%btnId%-icon"class="%iconClass%"></i><span class="editor-icon-name">%cmd%</span></div>';
  	  commands.map(function(command, i) {
  		commandRelation[command.cmd] = command;
  		var temp = template;
  		temp = temp.replace(/%iconClass%/gi, icon(command));
  		temp = temp.replace(/%desc%/gi, command.desc);
  		temp = temp.replace(/%btnClass%/gi, supported(command));
      temp = temp.replace(/%btnId%/gi, command.cmd);
  		temp = temp.replace(/%cmd%/gi, command.cmd);
  		html+=temp;
  	});
	  document.querySelector(".buttons").innerHTML = html;
}

init();

    function containsSelection(element) {
      var range = window.getSelection().getRangeAt(0);
      var node = $(range.commonAncestorContainer);

      if (node.parent().is(element)) {
        return true;
      } else {
        return false;
      }
    }

    $(document).ready(function(){
      $("#submit-blog").click(function(){
        /******************************************
        ********* GET EDITOR DATA SECTION *********
        ******************************************/
        var children = $('#editor').children();
        var blogDataArray = [];
        var blogData = {};
        console.log(children);

         for(var i=0;i<children.length;i++){
           switch (children[i].tagName) {
             case "H1":
               blogData = "<h1>" + children[i].innerHTML + "</h1>";
               blogDataArray.push(blogData);
               break;
             case "H2":
               blogData = "<h2>" + children[i].innerHTML + "</h2>";
               blogDataArray.push(blogData);
               break;
             case "H3":
               blogData = "<h3>" + children[i].innerHTML + "</h3>";
               blogDataArray.push(blogData);
               break;
             case "H4":
               blogData = "<h4>" + children[i].innerHTML + "</h4>";
               blogDataArray.push(blogData);
               break;
             case "H5":
               blogData = "<h5>" + children[i].innerHTML + "</h5>";
               blogDataArray.push(blogData);
               break;
             case "H6":
               blogData = "<h6>" + children[i].innerHTML + "</h6>";
               blogDataArray.push(blogData);
               break;
             case "P":
               blogData = "<p>" + children[i].innerHTML + "</p>";
               blogDataArray.push(blogData);
               break;
             case "OL":
               blogData = "<ol>" + children[i].innerHTML + "</ol>";
               blogDataArray.push(blogData);
               break;
             case "UL":
               blogData = "<ul>" + children[i].innerHTML + "</ul>";
               blogDataArray.push(blogData);
               break;
             default:

           }
         }
        $('#blog-content').val(blogDataArray);
      });


      var selection;
      // $('#editor').click(function(){
      //   // Heading
      //   if(containsSelection('h1') || containsSelection('h2') || containsSelection('h3') || containsSelection('h4') || containsSelection('h5') || containsSelection('h6')){
      //     $('#heading').addClass("active");
      //     $('#heading-icon').addClass("active");
      //   } else {
      //     $('#heading').removeClass("active");
      //     $('#heading-icon').removeClass("active");
      //   }
      //
      //   // Ordered List
      //   if(containsSelection('li')){
      //     $('#insertOrderedList').css({"background-color":"white", "color":"blue"});
      //     $('#insertOrderedList').addClass("active");
      //   } else {
      //     $('#insertOrderedList').css({"background-color":"white", "color":"black"});
      //     $('#insertOrderedList').removeClass("active");
      //   }
      //
      //   // Unordered List
      //   if(containsSelection('li')){
      //     $('#insertUnorderedList').css({"background-color":"white", "color":"blue"});
      //     $('#insertUnorderedList').addClass("active");
      //   } else {
      //     $('#insertUnorderedList').css({"background-color":"white", "color":"black"});
      //     $('#insertUnorderedList').removeClass("active");
      //   }
      //
      //   // Paragraph
      //   if(containsSelection('p')){
      //     $('#paragraph').css({"background-color":"white", "color":"blue"});
      //     $('#paragraph').addClass("active");
      //   } else {
      //     $('#paragraph').css({"background-color":"white", "color":"black"});
      //     $('#paragraph').removeClass("active");
      //   }
      //
      //   // Link
      //   if(containsSelection('a')){
      //     $('#link').css({"background-color":"white", "color":"blue"});
      //     $('#link').addClass("active");
      //   } else {
      //     $('#link').css({"background-color":"white", "color":"black"});
      //     $('#link').removeClass("active");
      //   }
      //
      //   // Bold
      //   if(containsSelection('b')){
      //     $('#bold').css({"background-color":"white", "color":"blue"});
      //     $('#bold').addClass("active");
      //   } else {
      //     $('#bold').css({"background-color":"white", "color":"black"});
      //     $('#bold').removeClass("active");
      //   }
      //
      //   // Italic
      //   if(containsSelection('i')){
      //     $('#italic').css({"background-color":"white", "color":"blue"});
      //     $('#italic').addClass("active");
      //   } else {
      //     $('#italic').css({"background-color":"white", "color":"black"});
      //     $('#italic').removeClass("active");
      //   }
      //
      //   // Underline
      //   if(containsSelection('u')){
      //     $('#underline').css({"background-color":"white", "color":"blue"});
      //     $('#underline').addClass("active");
      //   } else {
      //     $('#underline').css({"background-color":"white", "color":"black"});
      //     $('#underline').removeClass("active");
      //   }
      //
      //   // Image
      //   if(containsSelection('img')){
      //     $('#image').css({"background-color":"white", "color":"blue"});
      //     $('#image').addClass("active");
      //   } else {
      //     $('#image').css({"background-color":"white", "color":"black"});
      //     $('#image').removeClass("active");
      //   }
      //
      //   // backColor
      //   if(containsSelection('span')){
      //     $('#backColor').css({"background-color":"white", "color":"blue"});
      //     $('#backColor').addClass("active");
      //   } else {
      //     $('#backColor').css({"background-color":"white", "color":"black"});
      //     $('#backColor').removeClass("active");
      //   }
      //
      //   console.log(selection);
      // });



      /***********************************
      ********* PROJECTS SECTION *********
      ***********************************/

    });
  </script>
  <script type="text/javascript">
  var app = angular.module('plunkr', [], function($interpolateProvider) {
          $interpolateProvider.startSymbol('<%');
          $interpolateProvider.endSymbol('%>');
      });


    app.controller('myCtrl', function($scope) {
        $scope.firstName= "John";
        $scope.lastName= "Doe";
    });

    app.directive("ngFileSelect", function(fileReader, $timeout) {
      return {
        scope: {
          ngModel: '='
        },
        link: function($scope, el) {
          function getFile(file) {
            fileReader.readAsDataUrl(file, $scope)
              .then(function(result) {
                $timeout(function() {
                  $scope.ngModel = result;
                });
              });
          }

          el.bind("change", function(e) {
            var file = (e.srcElement || e.target).files[0];
            getFile(file);
          });
        }
      };
    });

  app.factory("fileReader", function($q, $log) {
    var onLoad = function(reader, deferred, scope) {
      return function() {
        scope.$apply(function() {
          deferred.resolve(reader.result);
        });
      };
    };

    var onError = function(reader, deferred, scope) {
      return function() {
        scope.$apply(function() {
          deferred.reject(reader.result);
        });
      };
    };

    var onProgress = function(reader, scope) {
      return function(event) {
        scope.$broadcast("fileProgress", {
          total: event.total,
          loaded: event.loaded
        });
      };
    };

    var getReader = function(deferred, scope) {
      var reader = new FileReader();
      reader.onload = onLoad(reader, deferred, scope);
      reader.onerror = onError(reader, deferred, scope);
      reader.onprogress = onProgress(reader, scope);
      return reader;
    };

    var readAsDataURL = function(file, scope) {
      var deferred = $q.defer();

      var reader = getReader(deferred, scope);
      reader.readAsDataURL(file);

      return deferred.promise;
    };

    return {
      readAsDataUrl: readAsDataURL
    };
  });

  </script>
</body>
