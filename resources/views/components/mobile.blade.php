<div class="mobile-menu">
	<div class="mob-menu-top">
		<div class="search">
			<input type="text" name="search" placeholder="Поиск..." />
			<button type="submit" class="btn-search"></button>
		</div>
		
		<div class="lang">
			<span>RU</span>
			<div class="lang-drop">
				<a href="#">UA</a>
			</div>
		</div>
	</div>
	<div class="mob-menu-buttons">
		<a href="#" class="btn">Заказать звонок</a>
		<a href="#" class="btn">Личный кабинет</a>
	</div>
	<div class="mob-nav">
		<ul>
			<li><a href="{{route('main')}}">ГЛАВНАЯ</a></li>
			<li><a href="{{route('aboutCompany')}}">О КОМПАНИИ</a></li>
			<li><a href="{{route('aboutWater')}}">О ВОДЕ</a></li>
			<li><a href="{{route('aboutCompany')}}">ПОЛЕЗНОЕ</a></li>
			<li><a href="{{route('delivery')}}">ДОСТАВКА И ЦЕНЫ</a></li>
			<li><a href="{{route('stock')}}">АКЦИИ</a></li>
			<li><a href="{{route('contacts')}}">КОНТАКТЫ</a></li>
		</ul>
	</div>
</div>

<div class="remodal modal-callback" data-remodal-id="modal-callback" id="modal-callback" data-remodal-options="hashTracking: false">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="form">
		<div class="form-head">
			<b>Оставьте заявку</b>
			и мы свяжемся с вами, чтобы уточнить детали заказа
		</div>
		<div class="form-body">
			<form action="mail.php" method="POST">
				<div class="input"><input type="text" name="name" required placeholder="Ваше имя"/></div>
				<div class="input"><input type="tel" name="phone" required placeholder="Ваш телефон"/></div>
				<input type="hidden" name="from" value=""/>
				<div class="button"><a href="#" class="btn">Отправить заявку</a></div>
			</form>
		</div>
	</div>
</div>