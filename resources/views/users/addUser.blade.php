@extends('layouts.app')
<!-- ユーザー登録 -->
@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					add user
				</div>

				<div class="panel-body">
					<!-- New Login Form -->
					<form action="/users/confirmUser" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- 名前 -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">name</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
							</div>
							
						</div>

						<!-- mail -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">mail</label>

							<div class="col-sm-6">
								<input type="text" name="mail" id="mail" class="form-control" value="{{ old('mail') }}">
							</div>
							
						</div>
						
						<!-- password -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Password</label>

							<div class="col-sm-6">
								<input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
							</div>
							
						</div>



						<!--login Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									入力を確認する
								</button>
							</div>
						</div>
					</form>
                </div>
			</div>
		</div>
	</div>
@endsection