@extends('app')
<?//dd($menu_data);?>
@section('content')
<div class="container">
	<div class="row">
        
        <div class="col-md-3">
            <div class="navmenu navmenu-default navmenu-fixed-left offcanvas in canvas-slid" style="left: 0px;">
                <!--
                  <p class="navmenu-brand" href="#">Ваше имя: <?/*=$user_data[0]->name;?></p>
                  <p class="navmenu-brand" href="#">Тип заведения: <?=$user_data[0]->type;?></p>
                  <p class="navmenu-brand" href="#">Ваш адресс: <?=$user_data[0]->adress;?></p>
                  <p class="navmenu-brand" href="#">Время работы: <?=$user_data[0]->work_time;?></p>
                  <p class="navmenu-brand" href="#">Описание заведения: <?=$user_data[0]->description;*/?></p>
                --><img src="<?='/public/img/'.$user_data[0]->img_path;?>" width="300" height="200">
                
                  <ul class="nav navmenu-nav">
                    <li><a href="<?=url('/addavatar',$secure = null);?>">добавить фото заведения</a></li>
                    <li ><a href="<?=url('/addtomenu',$secure = null);?>">добавить блюдо в меню</a></li>
                    <li><a href="<?=url('/map',$secure = null);?>">добавить ваше рассположение</a></li>
                    <li><a href="<?=url('/auth/logout',$secure = null);?>">Выйти</a></li>
                  </ul>
                 
                
                <script>
                    
                    $(function(){
                        $('.navmenu-nav li').mouseover(function(){
                            $(this).addClass('active');
                        });;
                         $('.navmenu-nav li').mouseout(function(){
                            $(this).removeClass('active');
                        });;
                        
                    });
                    
                </script>
                 
                
                
                    <!--menu-brand
                  <ul class="nav navmenu-nav">
                    <li><a href="../navmenu/">Slide in</a></li>
                    <li class="active"><a href="./">Push</a></li>
                    <li><a href="../navmenu-reveal/">Reveal</a></li>
                    <li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
                  </ul>
                  <ul class="nav navmenu-nav">
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu navmenu-nav">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>-->
            </div>
        
        </div>
        
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-heading">Меню</div>

				<!-- <div class="panel-body">
                    
                    Avatar:<br> <img src="<?/*='/public/img/'.$user_data[0]->img_path;?>"><br>
					id from session <?=Session::get('userid');?><br>
					Вы вошли!<br>
					Ваш id: <?=$user_data[0]->id;?><br>
					Ваше имя: <?=$user_data[0]->name;?><br>
					Тип вашего заведения: <?=$user_data[0]->type;?><br>
					Описание заведения: <?=$user_data[0]->description;?><br>
					Ваш адресс: <?=$user_data[0]->adress;?><br>
					lat: <?=$user_data[0]->lat;?><br>
					lng: <?=$user_data[0]->lng;?><br>
					Время работы: <?=$user_data[0]->work_time;*/?><br>
                    
					<a role="button" class='btn btn-primary' href="http://goldenbyteproject.esy.es/auth/logout">выйти</a><br><br>
					<a role="button" class='btn btn-primary' href="http://goldenbyteproject.esy.es/user/{id}/addtomenu">добавить блюдо</a>
					<a role="button" class='btn btn-primary' href="http://goldenbyteproject.esy.es/map">добавьте ваше местоположение</a>
				</div> 
                
                <div class="panel-body" >
							<label class="control-label">загрузить фотографию заведения</label><br>
                                
                                <form class="form-horizontal" role="form" method="POST" action="/user/addAvatar"  enctype="multipart/form-data" >
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input class="btn btn-promary" role="button" type="file" name="avatarimage">
                                    <button type="submit" class="btn btn-primary">
									Добавить
								    </button>
                                </form>
                                
						</div>
                <hr>-->
				
				  <div class="panel-body">
				
					
					<?
						foreach($menu_data as $key){
                            echo '<div class="col-sm-6 col-md-4">';
                            $path = '/public/img/'.$key->imgpath;
							echo "<div class='thumbnail' >
						      <img src=".$path." style='width=265px;height:175px;'>
						      <div class='caption'>
						        <h5>название:$key->name</h5>
                    <p>тип:$key->typeoffood</p>
						        <p>описание:$key->description</p>
						        <p>цена:$key->price</p>
						        						      ";
                if(!empty($key->etc)){
                  echo "
                  <p>дополнительно:$key->etc</p>
                  <p><a href='".url('/delete',[$key->id],$secure = null)."' class='btn btn-primary' role='button'>удалить</a> <a href='".url('/updatemenu',[$key->id],$secure = null)."' class='btn btn-primary' role='button'>изменить</a></p>
                  </div></div></div>";
                }else{
                  echo "
                  <p><a href='".url('/delete',[$key->id],$secure = null)."' class='btn btn-primary' role='button'>удалить</a> <a href='".url('/updatemenu',[$key->id],$secure = null)."' class='btn btn-primary' role='button'>изменить</a></p>
                  </div></div></div>";
                }
						}
					?>
					

            </div>

			</div>
          
		</div>
        

	</div>
</div>


<!--
<div class="navbar navbar-default navbar-fixed-top" style="">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
-->
@endsection
