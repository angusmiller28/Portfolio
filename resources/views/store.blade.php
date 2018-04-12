    @include('partials/header')
    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @include('partials/nav')
    <div id="container" >
        <section id="body-container">
          <div id="title-container"><h1 id="title">Store</h1></div>

          <div id="gallery" class="cards">
            <ul>
              @foreach($products as $product)
                  <div class="card">
                    <li>
                      <div class="card card-small"><a href="/product/{{$product->id}}">
                      <img src="/uploads/products/{{$product->display_image}}" /></a>
                      <p>{{ $product->name }}</p>
                      <p>${{ $product->price }}</p>
                      </div>
                    </li>
                  </div>
              @endforeach
            </ul>
          </div>
        </section>
    </div>
    @include('partials/footer')
  </body>
