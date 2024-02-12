@extends('assembly')
@section('contant')
<section class="block-inside">
	<div class="wrapper">
		<div class="breadcrumbs">
			@yield('link_map')
		</div>
		<div class="column-left">
			<div class="search">
				<form role="search" method="get" id="searchform" action="https://aquapro.ua/">
	<input type="text" value="" name="s" id="s" placeholder="Пошук...">
	<button type="submit" id="searchsubmit" class="btn-search"></button>
</form>

			</div>
			
			<div class="filter">
			            </div>
			
			<div class="account">
				<a href="{{route('login')}}" class="btn btn-big">
													    	Особистий кабінет				    				                </a>
			</div>
			<div class="col-menu">
								<ul id="menu-bokovoe-menyu" class="menu"><li id="menu-item-6129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6129"><a href="{{route('store')}}">Магазин</a></li>
<li id="menu-item-869" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-869"><a href="https://aquapro.ua/product/voda-aqua-pro-189l/">Вода Класична</a></li>
<li id="menu-item-868" class="menu-item menu-item-type-post_type menu-item-object-product current-menu-item menu-item-868"><a href="https://aquapro.ua/product/voda-s-ionami-serebra-aqua-pro-189l/" aria-current="page">Вода Срібна</a></li>
<li id="menu-item-741" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a href="{{route('delivery')}}">Служба доставки</a></li>
<li id="menu-item-740" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-740"><a href="{{route('stock')}}">Акції</a></li>
<li id="menu-item-764" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-764"><a href="{{route('blog')}}">Корисне</a></li>
</ul>							</div>
		</div>		
		@yield('block_contant')
	</div>
</section>
@endsection