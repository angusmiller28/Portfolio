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
      <ul>
        <li><p>{{ $productName }}</p></li>
        <li><p><img src="/uploads/products/{{ $productDisplayImage }}" alt="" style="width: 150px; height: 150px; "></li>
        <li><p>${{ $productPrice }}</p></li>
      </ul>
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


    </div>
    @include('partials/footer')
  </body>
</html>
