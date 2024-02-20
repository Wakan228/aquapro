@extends('layouts.blockInside')
@section('link_map')
@endsection
@section('block_contant')
<div class="content">
			<div class="content-article">
								                            <h1>Профіль</h1>
				    					<div class="text">
						<div class="woocommerce">
<nav class="woocommerce-MyAccount-navigation">
	<ul>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active">
				<a href="https://aquapro.ua/my-account/edit-account/">Профіль</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
				<a href="https://aquapro.ua/my-account/orders/">Замовлення</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
				<a href="https://aquapro.ua/my-account/edit-address/">Адреси</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
				<a href="https://aquapro.ua/my-account/downloads/">Завантаження</a>
			</li>
					<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
						<a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
			</li>
			</ul>
</nav>


<div class="woocommerce-MyAccount-content">
	<div class="woocommerce-notices-wrapper"></div>
<form class="woocommerce-EditAccountForm edit-account" action="" method="post">

	         <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="shipping_phone">Телефон <span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--phone input-text" name="shipping_phone" id="shipping_phone" value="380951937284">
        </p>
        
	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="account_first_name">Ім'я&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="">
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="account_last_name">Прізвище&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="">
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_display_name">Відображуване ім'я&nbsp;<span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="cmetabactborogom"> <span><em>Так ваше ім'я буде відображатися в розділі облікового запису і при переглядах</em></span>
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="account_email">Адреса електронної пошти&nbsp;<span class="required">*</span></label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" autocomplete="email" value="cmetabactborogom@gmail.com">
	</p>

	<fieldset>
		<legend>Зміна пароля</legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_current">Поточний пароль (залиште порожнім, щоб не змінювати)</label>
			<span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autocomplete="off"><span class="show-password-input"></span></span>
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1">Новий пароль (залиште порожнім, щоб не змінювати)</label>
			<span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" autocomplete="off"><span class="show-password-input"></span></span>
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2">Підтвердити новий пароль</label>
			<span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" autocomplete="off"><span class="show-password-input"></span></span>
		</p>
	</fieldset>
	<div class="clear"></div>

	
	<p>
		<input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="aa805d86b8"><input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/">		<button type="submit" class="woocommerce-Button button" name="save_account_details" value="Зберегти зміни">Зберегти зміни</button>
		<input type="hidden" name="action" value="save_account_details">
	</p>

	</form>

</div>
</div>
					</div>
							</div>
		</div>
		@endsection