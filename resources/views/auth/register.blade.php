@include('partials/header')
<title>Angus Miller Portfolio - Register</title>

<link href="{{asset('css/projects.css')}}" type="text/css" rel="stylesheet" />
</head>

<body>
@include('partials/nav')
@include('partials/messages')
<div id="container" >
    <section id="body-container">
      <div id="title-container"><h1 id="title">Register</h1></div>

        {!! Form::open(['action' => 'Auth\RegisterController@store', 'method' => 'POST']) !!}
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="text" name="email">
        <label>Password</label>
        <input type="text" name="password">
        <label>Confirm Password</label>
        <input type="text" name="password_confirmation">
        {{Form::submit('Register', ['class'=>'btn btn-default'])}}
      {!! Form::close() !!}
    </section>
</div>
@include('partials/footer')
</body>
