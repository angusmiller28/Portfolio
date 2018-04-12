    @include('partials/header')
    <title>Angus Miller Portfolio - Projects</title>

    <link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @include('partials/nav')
    <div id="container" >
        <section id="body-container">
          <div id="title-container"><h1 id="title">My Shopping Cart</h1></div>

          <div id="cart-container">
            @if(isset($items))
              @foreach($items as $item)
              <div class="cart-item">
                <p>{{ $item->name }}</p>
                <p>{{ $item->qty }}</p>
                <div class="update-quantity-item-btn">
                  {{ Form::open(['route' => ['products.update.quantity', $item->id], 'method' => 'POST']) }}
                    {{ Form::hidden('rowId', $item->rowId, ['class' => 'form-control']) }}
                    {{ Form::text('quantity', $item->qty, ['class' => 'form-control']) }}
                    {{ Form::submit('Update Quantity', ['class' => 'form-control btn btn-default']) }}
                  {{ Form::close() }}
                </div>
                <div class="remove-item-btn">
                  {{ Form::open(['route' => ['products.remove'], 'method' => 'POST']) }}
                    {{ Form::hidden('rowId', $item->rowId, ['class' => 'form-control']) }}
                    {{ Form::submit('Remove Product', ['class' => 'form-control btn btn-warning']) }}
                  {{ Form::close() }}
                </div>
                <p>Price: ${{ $item->price }}</p>
                <p>Tax: {{ $item->tax }} %</p>
                <p>Subtotal: ${{ $item->subtotal }}</p>
              </div>
              @endforeach
              <p>Total: ${{ $cartTotalCost }}</p>
              <div id="checkout-btn">
                {{ Form::open(['route' => ['checkout'], 'method' => 'POST']) }}
                  {{ Form::hidden('items', $items, ['class' => 'form-control']) }}
                  {{ Form::submit('Proceed to Checkout', ['class' => 'form-control btn btn-default']) }}
                {{ Form::close() }}
              </div>
            @else
              <p>
                Your cart is empty
              </p>
            @endif
          </div>
        </section>
    </div>
    @include('partials/footer')
  </body>
