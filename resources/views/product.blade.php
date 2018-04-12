<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/css_reset.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/nav.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/blog.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{asset('css/footer.css')}}" type="text/css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/brands.css" integrity="sha384-IiIL1/ODJBRTrDTFk/pW8j0DUI5/z9m1KYsTm/RjZTNV8RHLGZXkUDwgRRbbQ+Jh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    @include('partials/nav')
    <div id="container">
      <div class="">
        <ul>
          <li><p>{{ $productName }}</p></li>
          <li><p><img src="/uploads/products/{{ $productDisplayImage }}" alt="" style="width: 150px; height: 150px; "></li>
          <li><p>${{ $productPrice }}</p></li>
        </ul>
      </div>
      <div class="gallery">
        @foreach($productImages as $productImage)
          <img src="/uploads/products/{{ $productImage->image }}" alt="" style="width: 150px; height: 150px; ">
        @endforeach

        @if(isset($productVideos)) <!-- Video -->
          @foreach($productVideos as $productVideo)
          <div class="">
              <video width="320" height="240" controls src="/uploads/projects/{{$productVideo->video}}">
                Your browser does not support the video tag.
              </video>
          </div>
          @endforeach
        @endif <!-- END::Tools List -->
      </div>

      <div class="">
        {{ Form::open(['route' => ['products.add', $productId], 'method' => 'POST']) }}
          {{ Form::submit('Add to Cart', ['class' => 'form-control btn btn-default']) }}
        {{ Form::close() }}
      </div>

      <div id="comments-form-container">
        @if (Auth::check())
          <img src="/uploads/avatars/{{Auth::user()->avatar}}" alt="" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px">
          <p>{{Auth::user()->name}}</p>
          <p>{{Auth::user()->email}}</p>
          {{ Form::open(['route' => ['comments.store', $productId], 'method' => 'POST']) }}
            {{ Form::hidden('type', 'product') }}

            <div class="rating">
              <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
              <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
              <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
              <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
              <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
            </div>

            {{ Form::label('comment'), "Comment:" }}
            {{ Form::textarea('comment', null, ['class' => 'form-control', 'style' => 'background-color: orange']) }}

            {{ Form::submit('Add Comment', ['class' => 'form-control btn btn-default']) }}
          {{ Form::close() }}
        @endif
      </div>

      <div id="comments-container">
        @foreach($comments as $comment)
          <div class="comment">
            <img src="/uploads/avatars/{{ $comment['avatar']}}" alt="" style="width: 50px; height: 50px; border-radius: 50%; margin-right: 25px">
            <p>Rating: {{ $comment['rating'] }}</p>
            <p>Name: {{ $comment['name'] }}</p>
            <p>Comment: {{ $comment['comment'] }}</p>
          </div>
        @endforeach
      </div>

    </div>
    @include('partials/footer')
  </body>
</html>
