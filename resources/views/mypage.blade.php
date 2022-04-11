@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
				</div>
				<div class="panel-body">
					    <!--id-->
					        <label for="task-name" class="col-sm-3 control-label">id</label>
							<div class="col-sm-6">
							    <p>{{$login_user["id"]}}</p>
							</div>

				        <!-- 名前 -->
							<label for="task-name" class="col-sm-3 control-label">name</label>
							<div class="col-sm-6">
								<p>{{$login_user["name"]}}</p>
							</div>
							
						<!-- メールアドレス -->
							<label for="task-name" class="col-sm-3 control-label">mail</label>
							<div class="col-sm-6">
								<p>{{$login_user['email']}}</p>
							</div>
				</div>
			</div>

			<!-- Books -->
				<div class="panel panel-default">
					<div class="panel-heading">
						借りた書籍一覧
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Book</th>
								<th></th>
							</thead>
							<tbody>
							
							</tbody>
						</table>
					</div>
				</div>
		</div>
	</div>
@endsection