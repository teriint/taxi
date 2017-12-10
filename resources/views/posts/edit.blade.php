@extends('layouts.app')
 
@section('content')
<div class="container" id="adm">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Редактировать заказ</div>
 
                <div class="panel-body">
                    <form style="color:#1e0000" class="form-horizontal" role="form" method="POST" action="{{ route('update_post', ['post' => $post->id]) }}">
                        {{ csrf_field() }}
 					@if ($post->stat == "Свободен") 
                        <div class="form-group{{ $errors->has('p_o') ? ' has-error' : '' }}">
                            <label for="p_o" class="col-md-4 control-label">Новое место отправления</label>
 
                            <div class="col-md-6">
<p><select id="p_o" size="2" name="p_o" class="form-control" onclick="test()" required autofocus>
    <option  value="Нахимовский">Нахимовский</option>
    <option value="Гагаринский">Гагаринский</option>
    <option value="Ленинский">Ленинский</option>
   </select></p>
 
                                @if ($errors->has('p_o'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_o') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
 <div class="form-group{{ $errors->has('p_p') ? ' has-error' : '' }}">
                            <label for="p_p" class="col-md-4 control-label">Новое место назначения</label>
 
                            <div class="col-md-6">
 <p><select id="p_p" size="2"  name="p_p" class="form-control" onclick="test()" required autofocus>
    <option  value="Нахимовский">Нахимовский</option>
    <option value="Гагаринский">Гагаринский</option>
    <option value="Ленинский">Ленинский</option>
   </select></p>
                                @if ($errors->has('p_p'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_p') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            
             <div class="form-group{{ $errors->has('val') ? ' has-error' : '' }}">
                            <label for="val" class="col-md-4 control-label">Новое значение стоимости</label>
 
                            <div class="col-md-6">
                                <input id="val"  type="number" class="form-control" name="val" readonly="" value="{{ old('val', $post->val) }}" required autofocus>
 
                                @if ($errors->has('val'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('val') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
               <div class="form-group{{ $errors->has('stat') ? ' has-error' : '' }}">
                            <label for="stat" class="col-md-4 control-label">Новый статус</label>
 
                            <div class="col-md-6">
                                <input id="stat" type="radio" class="form-control" name="stat" readonly="" checked="Выполнен" value="Выполняется" required autofocus>Выполняется
                                <input id="stat" type="radio" class="form-control" name="stat" readonly="" value="Выполнен" required autofocus>Выполнен
                                <input id="stat" type="radio" class="form-control" name="stat" readonly="" value="Свободен" required autofocus>Свободен
 
                                @if ($errors->has('stat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
               
               <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Новый номер телефона</label>
 
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone', $post->phone) }}" required autofocus>
 
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Новая дополнительная информация</label>
 
                            <div class="col-md-6">
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Редактировать
                                </button>
                                @can('publish-post')
                                <a href="{{ route('publish_post', ['post' => $post->id]) }}" class="btn btn-primary">
                                    Опубликовать
                                </a>
                                @endcan
                                <a href="{{ route('list_posts') }}" class="btn btn-primary">
                                    Отмена
                                </a>
                            </div>
                        </div>
                        
                        @else
                        <a href="{{ route('show_post', ['id' => $post->id]) }}"> Заказ № {{ $post->id }}  </a> <br> <p style="color:#1e0000">завершен либо исполняется.
                        Данные изменению не подлежат.</p>
                        	<a href="{{ route('list_posts') }}" class="btn btn-primary">
                                    Вернуться
                                </a>						
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>	
var address1 = document.getElementById("p_o");
var address2 = document.getElementById("p_p");
function test() {
switch (address1.value) {
	
		case "Нахимовский":

		switch (address2.value) {	
		case "Нахимовский": 
					document.getElementById("val").value = "200";
					break;

		case "Гагаринский":
		document.getElementById("val").value = "400";
		break;
		
		case "Ленинский":
		document.getElementById("val").value = "600";
		break;
		
                default:
                document.getElementById("val").value = "0"; 
				break;
}
break;
		case "Гагаринский":

		switch (address2.value) {
		case "Нахимовский":
						document.getElementById("val").value = "400";
						break;
						
		case "Гагаринский":
		document.getElementById("val").value = "200";
		break;
		
		case "Ленинский":
		document.getElementById("val").value = "600";
		break;
                default:
                document.getElementById("val").value = "0"; 
				break;
}
break;

		case "Ленинский":
		
		switch (address2.value) {
		case "Нахимовский":
		document.getElementById("val").value = "600";
		break;
		case "Гагаринский":
		document.getElementById("val").value = "600";
		break;
		case "Ленинский":
		document.getElementById("val").value = "200";
		break;
                default:
             document.getElementById("val").value = "0";   
		break;
}
break;

		default:
		document.getElementById("val").value = "00"; 
		break;
	}
}
	</script>
@endsection