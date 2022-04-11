@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Book
				</div>

				<div class="panel-body">
				        <!-- 名前 -->
							<label for="task-name" class="col-sm-3 control-label">name</label>
							<div class="col-sm-6">
								<a>{{$user_data['name']}}</a>
							</div>
							
						

						<!-- メールアドレス -->
							<label for="task-name" class="col-sm-3 control-label">mail</label>
							<div class="col-sm-6">
								<a>{{$user_data['mail']}}</a>
							</div>
				</div>
			</div>

			<!-- Books -->
			@if (count($books) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						借りた書籍一覧
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Book</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($books as $book)
									<tr>
										<td class="table-text"><div></div></td>
										<td class="table-text"><div></div></td>
										<td class="table-text"><div></div></td>
										<!-- Task Delete Button -->
										<td>
											<form action="/book/{{ $book->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>削除
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection