@extends('Layouts.master')
@section('title', 'Home')

@section('content')
	<div style="margin-top: 250px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card shadow-lg p-4 mb-5 bg-body rounded">
						<div class="card-body">
							<h4 class="text-center">Welcome to Wewetube 2FA</h4>

							<div class="row mt-4">
								<div class="col-md-6 offset-md-3">

									<a href="{{route('register')}}">
										<button class="btn btn-secondary btn-lg">Register</button>
									</a>

									<a href="{{route('login')}}">
										<button class="btn btn-success btn-lg">Login</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection