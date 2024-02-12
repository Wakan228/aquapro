@extends('layouts.blockInside')
@section('link_map')
@endsection
@section('block_contant')
<div class="content">
			<div class="content-article">
								                            <h1>Профіль</h1>
				    					<div class="text">
						<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">


		<h2>Увійти</h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Ім'я користувача чи адреса електронної пошти&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Пароль&nbsp;<span class="required">*</span></label>
				<span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
			</p>

			
			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Пам'ятати мене</span>
				</label>
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="554587b97f"><input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/">				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Увійти">Увійти</button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="https://aquapro.ua/wp-login.php?action=lostpassword">Забули ваш пароль?</a>
			</p>

			
		</form>


	</div>

	<div class="u-column2 col-2">

		<h2>Реєстрація</h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register">

			        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="reg_shipping_phone">Телефон&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="shipping_phone" id="reg_shipping_phone" value="">
        </p>
    
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">Адреса електронної пошти&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">			</p>

			
				<p>На вашу email адресу буде надіслано пароль.</p>

			
			<div class="woocommerce-privacy-policy-text"><p>Ваші особисті дані будуть використані для підтримки вашого досвіду на цьому веб-сайті, для управління доступом до вашого облікового запису та для інших цілей, описаних у нашому <a href="https://aquapro.ua/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">політика конфіденційності</a>.</p>
</div>
			<p class="woocommerce-FormRow form-row">
				<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="52377e6a3b"><input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/">				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Реєстрація">Реєстрація</button>
			</p>

			
		</form>

	</div>

</div>

</div>
					</div>
							</div>
		</div>
		@endsection