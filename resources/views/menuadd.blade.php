@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Добавить в меню</div>

				<div class="panel-body">
					Добавить блюдо<br>
					<form class="form-horizontal" role="form" method="POST" action="/addtomenu"  enctype="multipart/form-data" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Название</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
                        
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Тип еды</label>
							<div class="col-md-6">
								<p><select class="selectpicker" name="typeoffood">
                                        <option selected value="напиток">напиток</option>
                                        <option selected value="первое">первое</option>
                                        <option selected value="второе">второе</option>
									    <option selected value="морепродукты">морепродукты</option>
									    <option  value="закуски">закуски</option>
									    <option value="кондитерские изделия">кондитерские изделия</option>
									    <option value="хлебо булочные изделия">хлебо булочные изделия</option>
                                        <option value="etc">Другое</option>
							   	   </select>
							    </p>
							</div>
						</div>
                        
                        <script>
                            $('.selectpicker').selectpicker({
                              style: 'btn-info',
                              size: 5
                            });
                                                   
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
                        

						<div class="form-group">
							<label class="col-md-4 control-label">Описание</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="desc" value="{{ old('desc') }}">
							</div>
						</div>

						<!--<div class="form-group">
							<label class="col-md-4 control-label">Дополнительно</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="etc" value="{{ old('desc') }}">
							</div>
						</div>-->

						<div class="form-group">
							<label class="col-md-4 control-label">цена</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price" >
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">загрузить картинку</label>
                                <div class="col-md-6">
                                    <input class="btn btn-promary" role="button" type="file" name="image">
                                </div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Добавить
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
