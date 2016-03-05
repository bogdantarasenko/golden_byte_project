@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Регистрация</div>
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

					<form class="form-horizontal" role="form" method="POST" action="/auth/signup">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Имя</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Тип</label>
							<div class="col-md-6">
								<p><select class="dropdown-header"  name="type[]">
									    <option disabled>Выберите тип вашего заведения</option>
                                        <option selected value="Ночной клуб">Ночной клуб</option>
                                        <option selected value="Ночной клуб">Развлечения</option>
                                        <option selected value="Кофейня">Кофейня</option>
									    <option selected value="Суши бар">Суши бар</option>
									    <option  value="Фаст фуд">Фаст фуд</option>
									    <option value="Ресторан">Ресторан</option>
									    <option value="Что то другое">Что то другое</option>
							   	   </select>
							    </p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Описание</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="desc" value="{{ old('desc') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">номер телефона</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="telephone">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Время работы</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="worktime" value="{{ old('worktime') }}">
							</div>
						</div>



						<div class="form-group">
							<label class="col-md-4 control-label">login</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="login" value="{{ old('login') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Зарегистрировать
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
