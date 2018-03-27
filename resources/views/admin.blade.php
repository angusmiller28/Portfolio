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

      @include('partials/footer')
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
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
