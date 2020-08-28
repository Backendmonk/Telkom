@extends('layouts.loginlayout')

@section('content')
<title>Login</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fen%2Fthumb%2Fc%2Fc4%2FTelkom_Indonesia_2013.svg%2F1200px-Telkom_Indonesia_2013.svg.png&f=1&nofb=1" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                	<span class="login100-form-title">
						Silahkan Login 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input placeholder = "Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                    
                    <input placeholder ="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						
					</div>

					<div class="container-login100-form-btn">
						<button type = "submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Lupa
						</span>
						<a class="txt2" href="{{ route('register') }}">
						 Password?
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>

@endsection

<!-- SELECT laporan.id, layanan.layanan,pelanggan.nama, pelanggan.alamat,pelanggan.pic1,pelanggan.pic2,pelanggan.datek,laporan.update,laporan.status FROM `laporan` inner join `pelanggan` on pelanggan.id = laporan.pelanggan_id INNER join `layanan` on layanan.id = pelanggan.layanan_id -->
