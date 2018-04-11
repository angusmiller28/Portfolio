<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href="{{asset('css/search-nav.css')}}" type="text/css" rel="stylesheet" />
  <link href="{{asset('css/drawer.css')}}" type="text/css" rel="stylesheet" />
</head>
<meta name="_token" content="{{ csrf_token() }}">

<section id="search-nav-drawer" class="slide-in-to-right hide">
    <ul class="drawer-content-container">
        <ul class="drawer-title-container">
          <li><h3><i class="fa fa-search"></i>Search</h3></li>
          <li class="close-nav-btn" class="pop"><h3><i class="fa fa-window-close warning"></i></h3></li>
        </ul>
        <div class="form-group">
          <input type="text" class="form-control" id="search" name="search" placeholder="Search"></input>
        </div>

        <div class="form-group">
          <div class="center-content">
            <ul id="filter-container">
              <li><p><i class="fa fa-filter"></i> filter</p></li>
              <li><h3><i id="filter-more-btn" class="fas fa-window-close"></i></h3></li>
            </ul>

          </div>
          <ul id="filter-content-container">
            <li>Blogs<input id="filter_blog_checkbox" type="checkbox" name="filter_blog_checkbox" checked></li>
            <li>Projects<input id="filter_project_checkbox" type="checkbox" name="filter_project_checkbox" checked></li>
          </ul>
        </div>

        <div class="center-content vertical-scrollable">

          <div id="search-results" class="cards ">

          </div>
        </div>

    </ul>
</section>
<script type="text/javascript">

$('#filter-more-btn').click(function(){
  $('#filter-content-container').toggle();
});
$('#search').on('keyup',function(){

$value=$(this).val();
$filter_blog_checkbox = document.getElementById('filter_blog_checkbox').checked;
$filter_project_checkbox = document.getElementById('filter_project_checkbox').checked;

$.ajax({

type : 'get',

url : '{{URL::to('search')}}',

data:{'search':$value, 'filter_blog_checkbox':$filter_blog_checkbox, 'filter_project_checkbox':$filter_project_checkbox},

success:function(data){

$('#search-results').html(data);

}

});





});

$('#filter_blog_checkbox').change(function() {
  $value=$('#search').val();
  $filter_blog_checkbox = document.getElementById('filter_blog_checkbox').checked;
  $filter_project_checkbox = document.getElementById('filter_project_checkbox').checked;

  $.ajax({

  type : 'get',

  url : '{{URL::to('search')}}',

  data:{'search':$value, 'filter_blog_checkbox':$filter_blog_checkbox, 'filter_project_checkbox':$filter_project_checkbox},

  success:function(data){

  $('#search-results').html(data);

  }

  });
});

$('#filter_project_checkbox').change(function() {
  $value=$('#search').val();
  $filter_blog_checkbox = document.getElementById('filter_blog_checkbox').checked;
  $filter_project_checkbox = document.getElementById('filter_project_checkbox').checked;

  $.ajax({

  type : 'get',

  url : '{{URL::to('search')}}',

  data:{'search':$value, 'filter_blog_checkbox':$filter_blog_checkbox, 'filter_project_checkbox':$filter_project_checkbox},

  success:function(data){

  $('#search-results').html(data);

  }

  });
});

</script>

<script type="text/javascript">

$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

</script>
<script src="{{asset('js/search-nav.js')}}" type="text/javascript"></script>
