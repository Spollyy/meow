<html>
<head>
 {{HTML::style('/ext/css/bootstrap.min.css');}}
</head>
<body>
	<nav class="navbar navbar-inverse">
	<a class="navbar-brand" href="#">Meow!</a>
	<ul class="nav navbar-nav">
	<p class="nav navbar-text">Админка</p>
	@yield('navigation')
      </ul>
	</nav>
    @yield('content')
</body>
</html>