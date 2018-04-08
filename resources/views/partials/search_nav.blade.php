<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href="{{asset('css/drawer.css')}}" type="text/css" rel="stylesheet" />
</head>
<meta name="_token" content="{{ csrf_token() }}">

<section id="search-nav-drawer" class="slide-in-to-right hide">
    <ul class="drawer-content-container">
        <ul class="drawer-title-container">
          <li><h3><i class="fa fa-bars"></i>Search</h3></li>
          <li class="close-nav-btn" class="pop"><h3><i class="fa fa-window-close warning"></i></h3></li>
        </ul>
        <div class="form-group">
          <input type="text" class="form-controller" id="search" name="search"></input>
        </div>

        <table class="table table-bordered table-hover">

        <thead>

        <tr>

        <th>ID</th>

        <th>Product Name</th>

        <th>Description</th>

        <th>Price</th>

        </tr>

        </thead>

        <tbody>

        </tbody>

        </table>

    </ul>
</section>
<script type="text/javascript">

$('#search').on('keyup',function(){

$value=$(this).val();

$.ajax({

type : 'get',

url : '{{URL::to('search')}}',

data:{'search':$value},

success:function(data){

$('tbody').html(data);

}

});



})

</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>
<script src="{{asset('js/search-nav.js')}}" type="text/javascript"></script>
