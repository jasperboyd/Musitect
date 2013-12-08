<html lang="en">
<head>
<title>Musitect</title> 
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100|Crimson+Text:400,600' rel='stylesheet' type='text/css'>
{{HTML::style('styles/css/screen.css');}}
</head>
<body>
    <header>
    	<h1>Musitect</h1>
    	<h2>A Songwriter's Toolkit</h2> 
    </header> 
    @if (Auth::check())
    <nav>
    	<a href="{{action('SongController@create');}}">New Song</a> 
    	<a href="{{action('SessionController@destroy');}}">Logout</a> 
    </nav>
    @endif
    @yield('content')
</body>
</html>
