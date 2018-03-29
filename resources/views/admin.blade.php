<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="plunkr" ng-controller="myCtrl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/css_reset.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/index.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" type="text/css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/filereader.js')}}"></script>
  </head>
  <body>
    <div id="container" >
      @include('partials/nav')
      @include('partials/messages')

      <!-- PROJECT FORM -->
      <div id="project-form-container">
        <h3>Add Project</h3>
        {!! Form::open(['action' => 'ProjectController@store', 'method' => 'POST', 'files' => true]) !!}
          <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}
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
          {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
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
          <div class="form-group">
            <ul>
              <li>Share on social media</li>
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

          <div id="editor" class="row" style="width: 300px; height: 200px; background: white;" contentEditable="true">asda</div>
          <button id="getData" type="button" name="button">Extract data</button>
          <input id="blog-content" type="text" name="blog-content" value="">

          {{Form::submit('Submit', ['id' => 'submit-blog', 'class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
      </div> <!-- END::BLOG FORM -->

      <!-- ADD ADMIN FORM -->
      <div id="admin-form-container">
        <h3>Add Staff</h3>
        <form method="POST" action="{{ route('admin.register.submit') }}">
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
            {{Form::label('password', 'Password')}}
            {{Form::text('password', '', ['class' => 'form-control'])}}
          </div>

          {{Form::submit('Submit', ['id' => 'submit-blog', 'class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
      </div> <!-- END::ADMIN FORM -->

      <!-- BLOG GALLERY -->
      <div id="blog-gallery-container" class="cards">
        <ul>
          <li>Blogs</li>
          @foreach($blogs as $blog)
              <div class="card">
                <li>
                  <div class="card card-small"><a href="blogs/blog/<?php echo $blog->blog_id ?>">
                  <img src="data:image/png;base64,<?php echo $blog->cover_image?>" /></a>
                  {{ Form::open(array('url' => 'blogs/' . $blog->blog_id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                  {{ Form::close() }}
                  </div>
                </li>
              </div>
          @endforeach
        </ul>
      </div><!-- END::BLOG GALLERY -->

      <!-- PROJECTS GALLERY -->
      <div id="project-gallery-container" class="cards">
        <ul>
          <li>Projects</li>
          @foreach($projects as $project)
              <div class="card">
                <li>
                  <div class="card card-small"><a href="projects/project/<?php echo $project->project_id ?>">
                  <img src="data:image/png;base64,<?php echo $project->cover_image?>" /></a>
                  {{ Form::open(array('url' => 'projects/' . $project->project_id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                  {{ Form::close() }}
                  </div>
                </li>
              </div>
          @endforeach
        </ul>
      </div><!-- END::PROJECTS GALLERY -->

      <!-- USERS GALLERY -->
      <div id="user-gallery-container" class="cards">
        <ul>
          <li>Users</li>
          @foreach($users as $user)
          <div class="card">
            <li>
              <div class="card card-small">
                <a href="users/user/<?php echo $user->id ?>">
                <img src="data:image/png;base64,<?php echo $user->profile_image?>" /></a>
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
      </div>

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
    <script src="{{asset('js/jquery-fieldselection.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
    var commands = [{
    	"cmd": "backColor",
    	"val": "red",
    	"desc": "Changes the document background color. In styleWithCss mode, it affects the background color of the containing block instead. This requires a color value string to be passed in as a value argument. (Internet Explorer uses this to set text background color.)"
    },
    {
  	"cmd": "foreColor",
  	"val": "rgba(0,0,0,.5)",
  	"desc": "Changes a font color for the selection or at the insertion point. This requires a color value string to be passed in as a value argument."
    },
    {
    	"cmd": "formatBlock",
      "val": "<blockquote>",
    	"desc": "Adds an HTML block-style tag around the line containing the current selection, replacing the block element containing the line if one exists (in Firefox, BLOCKQUOTE is the exception - it will wrap any containing block element). Requires a tag-name string to be passed in as a value argument. Virtually all block style tags can be used (eg. \"H1\", \"P\", \"DL\", \"BLOCKQUOTE\"). (Internet Explorer supports only heading tags H1 - H6, ADDRESS, and PRE, which must also include the tag delimiters &lt; &gt;, such as \"&lt;H1&gt;\".)"
    },
    {
    	"cmd": "heading",
    	"val": "h3",
    	"icon": "header",
    	"desc": "Adds a heading tag around a selection or insertion point line. Requires the tag-name string to be passed in as a value argument (i.e. \"H1\", \"H6\"). (Not supported by Internet Explorer and Safari.)"
    },
    {
    	"cmd": "formatBlock",
      "val": "<blockquote>",
    	"desc": "Adds an HTML block-style tag around the line containing the current selection, replacing the block element containing the line if one exists (in Firefox, BLOCKQUOTE is the exception - it will wrap any containing block element). Requires a tag-name string to be passed in as a value argument. Virtually all block style tags can be used (eg. \"H1\", \"P\", \"DL\", \"BLOCKQUOTE\"). (Internet Explorer supports only heading tags H1 - H6, ADDRESS, and PRE, which must also include the tag delimiters &lt; &gt;, such as \"&lt;H1&gt;\".)"
    },{
  	"cmd": "fontName",
  	"val": "'Inconsolata', monospace",
  	"desc": "Changes the font name for the selection or at the insertion point. This requires a font name string (\"Arial\" for example) to be passed in as a value argument."
  }, {
	"cmd": "copy",
	"icon": "clipboard",
	"desc": "Copies the current selection to the clipboard. Clipboard capability must be enabled in the user.js preference file. See"
},
{
	"cmd": "createLink",
	"val": "https://twitter.com/netsi1964",
	"icon": "link",
	"desc": "Creates an anchor link from the selection, only if there is a selection. This requires the HREF URI string to be passed in as a value argument. The URI must contain at least a single character, which may be a white space. (Internet Explorer will create a link with a null URI value.)"
}, {
	"cmd": "cut",
	"icon": "scissors",
	"desc": "Cuts the current selection and copies it to the clipboard. Clipboard capability must be enabled in the user.js preference file. See"
},
{
	"cmd": "delete",
	"icon": "scissors",
	"desc": "Deletes the current selection."
},
{
	"cmd": "heading",
	"val": "h3",
	"icon": "header",
	"desc": "Adds a heading tag around a selection or insertion point line. Requires the tag-name string to be passed in as a value argument (i.e. \"H1\", \"H6\"). (Not supported by Internet Explorer and Safari.)"
},
{
	"cmd": "bold",
	"icon": "bold",
	"desc": "Toggles bold on/off for the selection or at the insertion point. (Internet Explorer uses the STRONG tag instead of B.)"
},
, {
	"cmd": "insertOrderedList",
	"icon": "list-ol",
	"desc": "Creates a numbered ordered list for the selection or at the insertion point."
}, {
	"cmd": "insertUnorderedList",
	"icon": "list-ul",
	"desc": "Creates a bulleted unordered list for the selection or at the insertion point."
}, {
	"cmd": "insertParagraph",
	"icon": "paragraph",
	"desc": "Inserts a paragraph around the selection or the current line. (Internet Explorer inserts a paragraph at the insertion point and deletes the selection.)"
},
, {
	"cmd": "underline",
	"icon": "underline",
	"desc": "Toggles underline on/off for the selection or at the insertion point."
},
{
	"cmd": "createLink",
	"val": "https://twitter.com/netsi1964",
	"icon": "link",
	"desc": "Creates an anchor link from the selection, only if there is a selection. This requires the HREF URI string to be passed in as a value argument. The URI must contain at least a single character, which may be a white space. (Internet Explorer will create a link with a null URI value.)"
}
, {
	"cmd": "unlink",
	"icon": "chain-broken",
	"desc": "Removes the anchor tag from a selected anchor link."
},
, {
	"cmd": "selectAll",
	"desc": "Selects all of the content of the editable region."
}, {
	"cmd": "strikeThrough",
	"icon": "strikethrough",
	"desc": "Toggles strikethrough on/off for the selection or at the insertion point."
}, {
	"cmd": "subscript",
	"icon": "subscript",
	"desc": "Toggles subscript on/off for the selection or at the insertion point."
}, {
	"cmd": "superscript",
	"icon": "superscript",
	"desc": "Toggles superscript on/off for the selection or at the insertion point."
}, {
	"cmd": "insertImage",
	"val": "http://dummyimage.com/160x90",
	"icon": "picture-o",
	"desc": "Inserts an image at the insertion point (deletes selection). Requires the image SRC URI string to be passed in as a value argument. The URI must contain at least a single character, which may be a white space. (Internet Explorer will create a link with a null URI value.)"
}, {
	"cmd": "removeFormat",
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
        template = '<div id="%btnId%" class="btn btn-xs %btnClass%" title="%desc%" onmousedown="event.preventDefault();" onclick="doCommand(\'%cmd%\')"><i id="%btnId%-icon"class="%iconClass%"></i> %cmd%</div>';
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
        var toolName;
        var toolLink;

        $("#tools-add").click(function(){
          toolName = $("#toolsName").val();
          toolLink = $("#toolsLink").val();
          $("#tools-list").append('<li><input type="text" name="tools['+toolName+']['+toolLink+']" style="display:none"></li>');
          $("#tools-list").append('<li>Tool name: '+toolName+'</li>');
          $("#tools-list").append('<li>Tool link: '+toolLink+'</li>');
        });


        var socialName;
        var socialLink;

        $("#socials-add").click(function(){
          socialName = $("#socialsName").val();
          socialLink = $("#socialsLink").val();
          $("#socials-list").append('<li><input type="text" name="socials['+socialName+']['+socialLink+']" style="display:none"></li>');
          $("#socials-list").append('<li>Social name: '+socialName+'</li>');
          $("#socials-list").append('<li>Social link: '+socialLink+'</li>');
        });
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
</html>
