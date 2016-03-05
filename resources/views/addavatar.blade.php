@extends('app')
@section('content')
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

@endsection