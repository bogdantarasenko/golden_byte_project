@extends('app')

@section('content')

<?//dd($menu_data);?>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Изменить меню</div>

				<div class="panel-body">
					Изменить: <?=$menu_data[0]->name;?><br>
					<form class="form-horizontal" role="form" method="POST" action="/user/updatemenu"  enctype="multipart/form-data" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <input type="hidden" name="menuid" value="<?=$menu_data[0]->id;?>">
                        
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Текущее изображение</label>
							<div class="col-md-6">
                                <?
                                    $path = '/public/img/'.$menu_data[0]->imgpath;
                                ?>
								<img src="<?=$path;?>">
							</div>
						</div>
                        
						<div class="form-group">
							<label class="col-md-4 control-label">Название</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="<?=$menu_data[0]->name;?>">
							</div>
						</div>
                        
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">Тип еды</label>
							<div class="col-md-6">
								<p><select class="selectpicker" name="typeoffood">
                                        <option  value="напиток">напиток</option>
                                        <option  value="первое">первое</option>
                                        <option  value="второе">второе</option>
									    <option  value="морепродукты">морепродукты</option>
									    <option  value="закуски">закуски</option>
									    <option  value="кондитерские изделия">кондитерские изделия</option>
									    <option  value="хлебо булочные изделия">хлебо булочные изделия</option>
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
								<input type="text" class="form-control" name="desc" value="<?=$menu_data[0]->description;?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">цена</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price"  value="<?=$menu_data[0]->price;?>">
							</div>
						</div>
                        
                        <div class="form-group">
							<label class="col-md-4 control-label">изменить картинку</label>
                                <div class="col-md-6">
                                    <input class="btn btn-promary" role="button" type="file" name="image">
                                </div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Изменить
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
