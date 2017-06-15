<!DOCTYPE html>
<html lang="es" ng-app="MyFirstApp">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
		<title>
			Matemática - @yield('title', 'Default') 
		</title>
		<link rel="icon" href="{{asset('img/favicon_MA.png')}}"/>
	    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}"/>
	    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
	    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}"/>
	    <script src="{{asset('js/scroll.js')}}"></script>
	</head>
	<body ng-controller="FirstController">
		@include('index.template.partials.nav')
		@yield('section')
		@include('index.template.partials.footer')
		<script src="{{asset('jquery/jquery-3.1.1.min.js')}}"></script>
	    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	    <script src="{{asset('angularjs/angular.min.js')}}"></script>
	    <script>
			$('div.alert').not('.alert-important').delay(4000).fadeOut(350);
		</script>
		
		<!-- livezilla.net code -->
		<script type="text/javascript" id="26f6228f1cd86f3296f0c885dcac87bf" src="http://localhost/livezilla/script.php?id=26f6228f1cd86f3296f0c885dcac87bf"></script><!-- http://www.livezilla.net -->
	</body>
</html>