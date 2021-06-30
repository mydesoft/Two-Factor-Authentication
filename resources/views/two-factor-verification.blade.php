@extends('Layouts.master')
@section('title', 'Home')

@section('content')
	<div style="margin-top: 100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					@include('includes.flash')
					<div class="card shadow-lg p-4 mb-5 bg-body rounded">
						<div class="card-body">
							<h6 class="text-center text-danger">
									Two Phase Verification
							</h6>

							<img src="{{session('qrImage')}}"><br>

							If your device does not support barcode, please type in the secret key into your authenticator app 

							<p class="text-danger">{{session('secret')}}</p>


							<form method="POST" action="{{route('verifySecurityKey')}}">
								@csrf
								<div class="mb-3">
									<input type="text" name="security_key" class="form-control rounded-pill border-secondary" placeholder="Enter Security Key">
								</div>

								

								<div class="mb-3">
									<button class="btn btn-primary">Verify</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection