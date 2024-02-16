<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<meta name="description" content="Замовити питну воду в офіс або додому з доставкою в AquaPro ⭐ Краща ціна ⭐ Швидка доставка по Києву ⭐Гарантія якості" />
	<link rel="canonical" href="https://aquapro.ua/" />
	<meta property="og:locale" content="uk_UA" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Доставка води у Києві - замовити питну воду з доставкою в офіс і додому | AquaPro" />
	<meta property="og:description" content="Замовити питну воду в офіс або додому з доставкою в AquaPro ⭐ Краща ціна ⭐ Швидка доставка по Києву ⭐Гарантія якості" />
	<link rel='dns-prefetch' href='//ajax.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="icon" href="{{ asset('storage/images/insta1.01-100x100.png')}}" type="image/x-icon">
	
	<!-- Традиционная иконка сайта, размер 16x16, прозрачность поддерживается. Рекомендуемый формат: .ico -->
	<link rel="shortcut icon" href="favicon.ico" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/remodal.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/remodal-default-theme.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />

	<!-- JS -->
	<script type="text/javascript" src="{{ asset('js/jquery-1.11.0.min.js')}}"></script>
	<script>
		var w = screen.width;
		if(w < 450){
			$('head').append('<meta name="viewport" content="width=450, user-scalable=no" />')
		}else{
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />')
		}
	</script>
	@yield('link')
	
		<title>Доставка води у Києві - замовити питну воду з доставкою в офіс і додому | AquaPro</title>
	
</head>
<body>
	@include('layouts.storeLabel')
	<x-mobile />
	<x-header />
	<x-baner />
		@yield('contant')
	<x-footer />
	<script type="text/javascript" src="{{ asset('js/slick.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/wow.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/remodal.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/inputmask.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/scripts.js')}}"></script>
</body>
</html>