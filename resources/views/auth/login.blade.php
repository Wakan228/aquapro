{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('layouts.blockInside')
@section('link_map')
@endsection
@section('block_contant')
<style>
    
</style>
@include('layouts.popup')
<div class="content">
			<div class="content-article">
								                            <h1>{{__('messages.Profile')}}</h1>
				    					<div class="text">
						<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">


		<h2>Увійти</h2>

		<form method="POST" action="{{ route('login') }}" class="woocommerce-form woocommerce-form-login login" >
            @csrf
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Ім'я користувача чи адреса електронної пошти&nbsp;<span class="required">*</span></label>
				<input type="text" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="username"  value="">			</p>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </p>
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Пароль&nbsp;<span class="required">*</span></label>
				<span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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

		<form action="{{ route('register') }}" method="post" class="woocommerce-form woocommerce-form-register register">
            @csrf
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">{{__("messages.Email address")}}&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">			</p>
               @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="phone">{{__("messages.Phone")}}&nbsp;<span class="required">*</span></label>
				<input type="phone" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="phone" value="">			</p>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

			
			
				<p>На вашу email адресу буде надіслано пароль.</p>

			
			<div class="woocommerce-privacy-policy-text"><p>Ваші особисті дані будуть використані для підтримки вашого досвіду на цьому веб-сайті, для управління доступом до вашого облікового запису та для інших цілей, описаних у нашому <a href="https://aquapro.ua/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">політика конфіденційності</a>.</p>
</div>
			<p class="woocommerce-FormRow form-row">
				<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="52377e6a3b"><input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/">			
                	
			</p>

			
		</form>
        <button onclick="openModal()" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Реєстрація">Реєстрація</button>

	</div>

</div>

</div>
					</div>
							</div>
		</div>
		@endsection