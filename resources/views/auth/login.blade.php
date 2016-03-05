@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Авторизация</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Логин</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="login">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Пароль</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

					

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Войти
								</button>
								<a role="button" class='btn btn-success' href="<?=url('auth/signup',$secure = null);?>">Регистрация</a>
							</div>
						</div>
                        <br><br>
                        test login:test<br>
                        test password:test
                        <?if(isset($error) && $error == 'Ошибка авторизации'){
                            echo $error;
                        }?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection