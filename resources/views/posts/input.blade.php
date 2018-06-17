@extends('layouts.app')
 
@section('content')
<div class="container" id="adm">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Заказ</div>
 
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store_post') }}">
                        {{ csrf_field() }}
 	
                        <div class="form-group{{ $errors->has('p_o') ? ' has-error' : '' }}">
                            <label  for="p_o" class="col-md-4 control-label">Откуда</label>
                            <div class="col-md-6">   
							<input 
                                @if ($errors->has('p_o'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_o') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 					<div class="form-group{{ $errors->has('p_p') ? ' has-error' : '' }}">
                            <label for="p_p" class="col-md-4 control-label">Куда</label>
                            <div class="col-md-6">
							 <p><select onclick="test()" id="p_p" size="2" name="p_p" class="form-control"  required autofocus>
							    <option value="Нахимовский">Нахимовский</option>	
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
                            <label for="val" class="col-md-4 control-label">Стоимость</label> 
 
                            <div class="col-md-6">
                                <input  id="val" type="text" class="form-control" name="val"  readonly  required autofocus> 
                             
                                @if ($errors->has('val'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('val') }}</strong> 
                                    </span>
                                @endif
                            </div>
                        </div>    
                                     
                          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">№ мобильного телефона      	 <font size=5>+</font></label>
 
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required autofocus>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Дополнительный комментарий (Body)</label>
 
                            <div class="col-md-6">
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control" required>{{ old('body') }}</textarea>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                        <div class="form-group{{ $errors->has('stat') ? ' has-error' : '' }}">
                            <!-- <label for="stat" class="col-md-4 control-label">Статус заказа</label> -->
 
                            <div class="col-md-6">
                             
                             <input style="visibility: hidden" typeid="stat" checked="Свободен" type="radio"  class="form-control" name="stat" value="Свободен" required autofocus>
                                @if ($errors->has('stat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('stat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
						
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Создать
                                </button>
                                <a href="{{ route('list_posts') }}" class="btn btn-primary">
                                    Отмена
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection	