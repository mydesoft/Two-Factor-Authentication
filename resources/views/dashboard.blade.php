@extends('Layouts.master')
@section('title', 'Home')

@section('content')
	<div style="margin-top: 100px;">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card shadow-lg p-4 mb-5 bg-body rounded">
						
						<div class="card-body">
							<h4 class="text-center">{{Auth::user()->name}}</h4>

							<p>Logged in....</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection