<html lang="en">
<head>
<title>Musitect</title> 
{{HTML::style('styles/css/screen.css');}}
</head>
<body>
    <header>
    	<a href="{{ action('HomeController@index') }}"><h1>Musitect</h1></a>
    	<h2>A Songwriter's Toolkit</h2> 
    </header> 
    @if (Auth::check())
    <nav>
    	<a href="{{ action('SongController@create') }}">New Song</a> 
        <!--Users--> 
        <!--Collectives--> 
        <a href="{{ action('UserController@show', Auth::User()->id) }}">Profile</a> 
        <a href="{{ action('UserController@edit', Auth::User()->id) }}">Settings</a> 
    	<a href="{{ action('SessionController@destroy') }}">Logout</a> 
    </nav>
    @endif
    @yield('content')
</body>
</html>
