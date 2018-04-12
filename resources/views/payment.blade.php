    @include('partials/header')
    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @include('partials/nav')
    <div id="container" >
        <section id="body-container">
          <div id="title-container"><h1 id="title">Payment</h1></div>

          <div id="payment-container">
            {{ Form::open(['route' => ['payment.stripe'], 'method' => 'POST']) }}
              <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_rF1ferDXoD5Dt2YBjNuwdWeF"
                data-amount="999"
                data-name="Demo Site"
                data-description="Example charge"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="aud">
              </script>
            {{ Form::close() }}
          </div>
        </section>
    </div>
    @include('partials/footer')
  </body>
