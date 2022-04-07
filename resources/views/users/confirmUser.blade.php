@extends('layouts.app')
<!-- ユーザー登録 -->
@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Book
				</div>
				<form action="/users/completeUser" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- 名前 -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">name</label>
							<div class="col-sm-6">
								<a>{{$user_data['name']}}</a>
							</div>
							
						</div>

						<!-- メールアドレス -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">mail</label>
							<div class="col-sm-6">
								<a>{{$user_data['mail']}}</a>
							</div>
							
						</div>
						
						<!-- パスワード -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Password</label>
							<div class="col-sm-6">
								<a>{{$user_data['password']}}</a>
							</div>
							
						</div>



						<!--login Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									登録する
								</button>
							</div>
						</div>
					</form>
				
				
				
				
			</div>
		</div>
	</div>
@endsection