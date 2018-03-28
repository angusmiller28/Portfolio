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

      <div id="project-form-container">
        <h3>Add Project</h3>
        <!-- PROJECT FORM -->
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
        <!-- END PROJECT FORM -->
      </div>

      <div id="blog-form-container">
        <h3>Add Blog</h3>
        <!-- PROJECT FORM -->
        {!! Form::open(['action' => 'BlogController@store', 'method' => 'POST', 'files' => true]) !!}
          <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}
          </div>
          <div class="form-group">
            <ul>
              <li>Share on social media</li>
              <li>
                <i class="fab fa-facebook-square"></i>
                {{Form::label('Facebook', 'facebook')}}
                {{Form::checkbox('Facebook', '')}}
              </li>
              <li>
                <i class="fab fa-twitter-square"></i>
                {{Form::label('Twitter', 'twitter')}}
                {{Form::checkbox('Twitter', '')}}
              </li>
              <li>
                <i class="fab fa-google-plus-square"></i>
                {{Form::label('Google+', 'google')}}
                {{Form::checkbox('Google+', '')}}
              </li>
              <li>
                <i class="fab fa-reddit-square"></i>
                {{Form::label('Reddit', 'reddit')}}
                {{Form::checkbox('Reddit', '')}}
              </li>
              <li>
                <i class="fa fa-envelope-square"></i>
                {{Form::label('Email', 'email')}}
                {{Form::checkbox('Email', '')}}
              </li>
            </ul>
          </div>
          <!-- <div class="form-group">
            <button id="bold" type="button" name="button">Bold</button>
            {{Form::label('Text', 'text')}}
            {{Form::textarea('Text', '', ['class' => 'form-control', 'id' => 'editor'])}}
          </div> -->
          <div class="form-group">
            <button id="heading" type="button" name="button"><i class="fa fa-heading"></i></button>
            <button id="list-ol" type="button" name="button"><i class="fa fa-list-ol"></i></button>
            <button id="list-ul" type="button" name="button"><i class="fa fa-list-ul"></i></button>
            <button id="paragraph" type="button" name="button"><i class="fa fa-paragraph"></i></button>
            <button id="bold" type="button" name="button"><i class="fa fa-bold"></i></button>
            <button id="italic" type="button" name="button"><i class="fa fa-italic"></i></button>
            <button id="underline" type="button" name="button"><i class="fa fa-underline"></i></button>
            {{Form::file('mobileImage', ['class' => 'form-control', 'accept' => 'image/png', 'ng-file-select' => 'onFileSelect($files)', 'ng-model' => 'mobileImage'])}}
            <button id="image" type="button" name="button"><i class="fa fa-image"></i></button>
            <button id="colour" type="button" name="button"><i class="fa fa-tint"></i></button>
            <button id="getData" type="button" name="button"><i class="fa fa-plus"></i></button>
            <div id="colour-picker-container">
              <input id="color-picker" type="color" name="favcolor" value="#ff0000">
            </div>

            </div>
            {{Form::label('Text', 'text')}}
            <section id="editor" class="editable"></section>

            <input id="editor-data" type="text" name="editor-data">
          </div>

          {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
        <!-- END PROJECT FORM -->
      </div>

      @include('partials/footer')
    </div>
    <style>
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

    function select() {
      var flag = 0;

      sel = window.getSelection();
      for (var i = 0; i < sel.rangeCount; i++) {
          var s = sel.getRangeAt(i).startContainer.parentNode.id;
          var e = sel.getRangeAt(i).endContainer.parentNode.id;
          if (s == "editor") flag = 1;
          if (flag = 1 && e == "editor" || e == "editor-child") flag = 2;
      }

      if (flag == 2) alert(sel);
      }

      function surroundSelection(element, style) {
          var elem = document.createElement(element);


          // if element is ol
          // style with params
          if (element == "ol" || element == "ul"){
              surroundSelection('li');
          }


          // if element is SPAN
          // style with params
          if (element == "span"){
            for (var key in style){
              if (key == "colour")
                elem.style.color = style[key];
              else if (key == "weight")
                elem.style.fontWeight = style[key];
            }
          }

          // if element is IMG
          // style with params
          if (element == "img"){
            for (var key in style){
              switch (key) {
                case "src":
                  elem.src = ""+ style[key] + "";
                  break;
                case "id":
                  elem.id = style[key];
                  break;
                default:
                  var attr = document.createAttribute(key);
                  attr.value = style[key];
                  elem.setAttributeNode(attr)
                  break;
              }
            }
          }

          if (window.getSelection) {
              var sel = window.getSelection();
              if (sel.rangeCount) {
                  var range = sel.getRangeAt(0).cloneRange();
                  range.surroundContents(elem);
                  sel.removeAllRanges();
                  sel.addRange(range);
              }
          }
      }

      function removeSelection(element) {
        var range = window.getSelection().getRangeAt(0);

        var node = $(range.commonAncestorContainer)

        if (node.parent().is(element)) {
            node.unwrap();
        }
      }


      function containsSelection(element) {
        var range = window.getSelection().getRangeAt(0);

        var node = $(range.commonAncestorContainer)

        if (node.parent().is(element)) {
          return true;
        } else {
          return false;
        }
      }

      $(document).ready(function(){
        /******************************************
        ********* GET EDITOR DATA SECTION *********
        ******************************************/
        $('#getData').click(function(){
         var children = $('#editor').children();
         var blogDataArray = [];
         var blogData = {};

          for(var i=0;i<children.length;i++){
            switch (children[i].tagName) {
              case "P":
                blogData = {"P":children[i].outerText};
                blogDataArray.push(blogData);
                break;
              case "B":
                blogData = {"B":children[i].outerText};
                blogDataArray.push(blogData);
                break;
              default:

            }
          }
          console.log(blogDataArray);
        });

        /***********************************
        ********* TEXT SECTION *********
        ***********************************/
        var selected = false;

        $('#editor').each(function(){
            this.contentEditable = true;
        });

        $("#editor").keypress(function(e) {
          // trap the return key being pressed
          if (e.keyCode === 13) {
            // insert 2 br tags (if only one br tag is inserted the cursor won't go to the next line)
            document.execCommand('insertHTML', false, '<br><br>');
            // prevent the default behaviour of return key pressed
            return false;
          }
        });

        var selection;

        $('#editor').click(function(){
          // Heading
          if(containsSelection('h2')){
            $('#heading').css({"background-color":"white", "color":"blue"});
            $('#heading').addClass("active");
          } else {
            $('#heading').css({"background-color":"white", "color":"black"});
            $('#heading').removeClass("active");
          }

          // Ordered List
          if(containsSelection('li')){
            $('#list-ol').css({"background-color":"white", "color":"blue"});
            $('#list-ol').addClass("active");
          } else {
            $('#list-ol').css({"background-color":"white", "color":"black"});
            $('#list-ol').removeClass("active");
          }

          // Unordered List
          if(containsSelection('li')){
            $('#list-ul').css({"background-color":"white", "color":"blue"});
            $('#list-ul').addClass("active");
          } else {
            $('#list-ul').css({"background-color":"white", "color":"black"});
            $('#list-ul').removeClass("active");
          }

          // Paragraph
          if(containsSelection('p')){
            $('#paragraph').css({"background-color":"white", "color":"blue"});
            $('#paragraph').addClass("active");
          } else {
            $('#paragraph').css({"background-color":"white", "color":"black"});
            $('#paragraph').removeClass("active");
          }

          // Bold
          if(containsSelection('b')){
            $('#bold').css({"background-color":"white", "color":"blue"});
            $('#bold').addClass("active");
          } else {
            $('#bold').css({"background-color":"white", "color":"black"});
            $('#bold').removeClass("active");
          }

          // Italic
          if(containsSelection('i')){
            $('#italic').css({"background-color":"white", "color":"blue"});
            $('#italic').addClass("active");
          } else {
            $('#italic').css({"background-color":"white", "color":"black"});
            $('#italic').removeClass("active");
          }

          // Underline
          if(containsSelection('u')){
            $('#underline').css({"background-color":"white", "color":"blue"});
            $('#underline').addClass("active");
          } else {
            $('#underline').css({"background-color":"white", "color":"black"});
            $('#underline').removeClass("active");
          }

          // Image
          if(containsSelection('img')){
            $('#image').css({"background-color":"white", "color":"blue"});
            $('#image').addClass("active");
          } else {
            $('#image').css({"background-color":"white", "color":"black"});
            $('#image').removeClass("active");
          }

          // Colour
          if(containsSelection('span')){
            $('#colour').css({"background-color":"white", "color":"blue"});
            $('#colour').addClass("active");
          } else {
            $('#colour').css({"background-color":"white", "color":"black"});
            $('#colour').removeClass("active");
          }

          console.log(selection);
        });

        $('#heading').click(function(){
          if ($('#heading').hasClass("active")){
            removeSelection('h2');
            // surroundSelection('p');
          } else {
            // removeSelection('p');
            surroundSelection('h2');
          }
        });

        $('#list-ol').click(function(){
          if ($('#list-ol').hasClass("active")){
            removeSelection('ol');
          } else {
            surroundSelection('ol');
          }
        });

        $('#list-ul').click(function(){
          if ($('#list-ul').hasClass("active")){
            removeSelection('ul');
          } else {
            surroundSelection('ul');
          }
        });


        $('#paragraph').click(function(){
          if ($('#paragraph').hasClass("active")){
            removeSelection('p');
          } else {
            if(containsSelection('div')){

              surroundSelection('p');
            } else {
              surroundSelection('p');
            }


          }
        });

        $('#bold').click(function(){
          if ($('#bold').hasClass("active")){
            removeSelection('b');
          } else {
            if(containsSelection('p'))
              surroundSelection('b');
          }
        });

        $('#italic').click(function(){
          if ($('#italic').hasClass("active")){
            removeSelection('i');
          } else {
            surroundSelection('i');
          }
        });

        $('#underline').click(function(){
          if ($('#underline').hasClass("active")){
            removeSelection('u');
          } else {
            surroundSelection('u');
          }
        });

        $('#colour').click(function(){
          if ($('#colour').hasClass("active")){
            removeSelection('span');
          } else {
            var colour = $('#color-picker').val();
            surroundSelection('span', {colour: colour});
          }
        });

        // Image
        //{{HTML::image('', '', ['ng-src' => '<% mobileImage %>', 'width' => '300', 'id' => 'myFile'])}}
        $('#image').click(function(){
          if ($('#image').hasClass("active")){
            removeSelection('img');
          } else {
            //var url = 'http://3.bp.blogspot.com/-9zcswb51KYo/VWKjk5dM95I/AAAAAAAANDA/-lXNex7eFR0/s1600/cool-backgrounds-images-27-download-wallpapers-backgrounds.jpg';
            surroundSelection('img', {'ng-src':'<% mobileImage %>', 'id':'myFile'});
          }
        });

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
