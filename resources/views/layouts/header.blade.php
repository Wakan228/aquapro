<header class="header">
	<div class="header-top">
		<div class="wrapper">
			<div class="left">
				<a href="{{route('cart')}}" class="btn">Замовити воду</a>
				<a target="_blank" href="https://t.me/AQUAPRO_UA" class="soc soc-tg">
				    <img src="https://aquapro.ua/wp-content/themes/aquapro/images/soc-tg.svg" alt="" />
				</a>
				<a target="_blank" href="viber://chat?number=+380681004444" class="soc soc-vb">
				    <img src="https://aquapro.ua/wp-content/themes/aquapro/images/viber.svg" alt="" />
				</a>
			</div>
			<div class="logo">
                <a href="https://aquapro.ua">
                    <img src="https://aquapro.ua/wp-content/themes/aquapro/images/logo.png" alt="" />
                </a>
			</div>
			<div class="right">
				
								
								@if(auth()->check())
									<div class="prifile">
										<a href="https://aquapro.ua/my-account/">
											{{auth()->user()->display_name}}
											<img src="https://image.flaticon.com/icons/svg/1077/1077114.svg" alt="">
											
										</a>
								</div>
									@else
									<div class="prifile">
										<a href="{{route('my-account.login-account')}}"><img src="https://image.flaticon.com/icons/svg/1077/1077114.svg" alt=""> Увійти</a>
									</div>
									@endif
	
								
				<div class="lang">
											<span>uk</span>
						<div class="lang-drop"><a class="active d-none" data-link="{{route('main')}}" href="{{route('main')}}" hreflang="uk" title="Українська">uk</a><a class=""  href="{{route('main')}}" hreflang="ru" title="Русский">ru</a></div>									</div>
				<div class="phones">
					<span>
                        <a href="tel:0443654444">(044) 365-44-44</a>
                        <a href="tel:0681004444">(068) 100-44-44</a>
					</span>
					<div class="phones-drop">

						<a href="tel:0984224444">(098) 422-44-44</a>
						<a href="tel:0937604444">(093) 760-44-44</a>
						<a href="tel:0664184444">(066) 418-44-44</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-mob">
		<div class="header-mob__icon">
			<a target="_blank" href="https://t.me/AQUAPRO_UA" class="soc soc-tg">
				<img src="https://aquapro.ua/wp-content/themes/aquapro/images/soc-tg.svg" alt="" />
			</a>
			<a target="_blank" href="viber://chat?number=+380681004444/" class="soc soc-vb">
				<img src="https://aquapro.ua/wp-content/themes/aquapro/images/viber.svg" alt="" />
			</a>
			<div class="phones">
				<span>
					<img src="https://aquapro.ua/wp-content/themes/aquapro/images/soc-viber.svg" alt="" />
				</span>
				
				<div class="phones-drop">
					<a href="tel:0443654444">(044) 365-44-44</a>
					<a href="tel:0984224444">(098) 422-44-44</a>
					<a href="tel:0681004444">(068) 100-44-44</a>
					<a href="tel:0937604444">(093) 760-44-44</a>
					<a href="tel:0664184444">(066) 418-44-44</a>
				</div>
			</div>
		</div>
		
		<div class="logo">
		    <a href="https://aquapro.ua">
		        <img src="https://aquapro.ua/wp-content/themes/aquapro/images/logo.png" alt="" />
		    </a>
		</div>
		<div class="right">
			<div class="lang">
									<span>uk</span>
					<div class="lang-drop"><a class="active d-none" data-link="https://aquapro.ua/uk/" href="https://aquapro.ua/" hreflang="uk" title="Українська">uk</a><a class=""  href="https://aquapro.ua/ru/" hreflang="ru" title="Русский">ru</a></div>							</div>
			<div class="toggle-menu">
				<span></span>
			</div>
		</div>

	</div>
	<div class="header-bottom">
		<div class="wrapper">
			<div class="nav">
								<ul id="menu-glavnoe-menyu" class="menu"><li id="menu-item-832" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-832"><a href="{{route('main')}}" aria-current="page">Головна</a></li>
<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="{{route('store')}}">Магазин</a></li>
<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="{{route('aboutWater')}}">Про воду</a></li>
<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a href="{{route('delivery')}}">Доставка і ціни</a></li>
<li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="{{route('stock')}}">Акції</a></li>
<li id="menu-item-661" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-661"><a href="{{route('blog')}}">Блог</a></li>
<li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a href="{{route('contacts')}}">Контакти</a></li>
<li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="{{route('aboutCompany')}}">Про компанію</a></li>
</ul>			</div>
		</div>
	</div>
</header>