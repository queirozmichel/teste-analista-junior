<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>CRO-MG</title>

   <!-- Favicon -->
   <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

   <!-- Fontes -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

   <!-- Styles -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="{{URL::asset('css/style-home.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
			<div class="top-right links">
				@auth
				<a href="{{ url('/cadastro') }}">Registros</a>
				@else
				<a href="{{ route('login') }}">Login</a>
				<a href="{{ route('register') }}">Registrar-se</a>
				@endauth
			</div>
		@endif
		<div class="CSSgal">
			<s id="s1"></s> 
			<s id="s2"></s>
			<s id="s3"></s>
			<div class="slider">
				<div style="background:#5b8;">
					<img src="{{URL::asset('img/fundo.png')}}" width=500 height=260 />
				</div>
				<div style="background:#85b;">
					<img src="{{URL::asset('img/fundo1.jpg')}}" width="500" height="260" />
				</div>
				<div style="background:#e95;">
					<img src="{{URL::asset('img/fundo2.png')}}" width="500" height="260" />
				</div>
				<div style="background:#e59;">
					<h2>Slide 4</h2>
				</div>
			</div>
			<div class="prevNext">
				<div><a href="#s1"></a><a href="#s3"></a></div>
				<div><a href="#s2"></a><a href="#s4"></a></div>
				<div><a href="#s3"></a><a href="#s1"></a></div>
			</div>
			<div class="bullets">
				<a href="#s1"></a>
				<a href="#s2"></a>
				<a href="#s3"></a>
			</div>
		</div>
	</div>
</body>
</html>
