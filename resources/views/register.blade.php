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
							<h4 class="text-center">Register</h4>

							<form method="POST" action="{{route('registerUser')}}">
								@csrf
								<div class="mb-3">
									<label><h5>Name</h5></label>
									<input type="text" name="name" class="form-control rounded-pill border-secondary">
								</div>

								<div class="mb-3">
									<label><h5>Email</h5></label>
									<input type="text" name="email" class="form-control rounded-pill border-secondary">
								</div>

								<div class="mb-3">
									<label><h5>Passwrod</h5></label>
									<input type="password" name="password" class="form-control rounded-pill border-secondary">
								</div>

								<div class="mb-3">
									<label><h5>Confirm Passwrod</h5></label>
									<input type="password" name="password_confirmation" class="form-control rounded-pill border-secondary">
								</div>

								<div class="mb-3">
									<button class="btn btn-primary">Register</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection