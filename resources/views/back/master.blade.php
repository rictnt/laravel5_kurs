<!DOCTYPE html>
<html>
	<head>
		@include('back.master.head')
		@yield('head')
	</head>
	<body class="skin-purple sidebar-mini">
		<div class="wrapper">
			@include('back.master.navbar')
			@include('back.master.menu')
			@yield('content')
		</div>
		@include('back.master.footer')
		@yield('footer')
	</body>
</html>