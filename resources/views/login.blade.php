@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Login
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Login Form -->
					<form action="/mypage" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Login ID -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Mail</label>

							<div class="col-sm-6">
								<input type="text" name="mail" id="mail" class="form-control" value="{{ old('mail') }}">
							</div>
							
						</div>

						<!-- Password -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Password</label>

							<div class="col-sm-6">
								<input type="text" name="password" id="password" class="form-control" value="{{ old('password') }}">
							</div>
							
						</div>

						<!--login Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									ログイン
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- Books -->
			
		</div>
	</div>
@endsection