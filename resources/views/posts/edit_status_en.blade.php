@extends('layouts.app_en')
 
@section('content')
<div class="container" id="adm">
    <div class="row">
        <div class="col-md-7	 col-md-offset-3">
            <div class="panel panel-default">
            
                <div class="panel-heading">The confirmation</div>
   				
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update_status_post_en', ['post' => $post->id]) }}">
                        {{ csrf_field() }}
                        
						<div  class="col-md-10 col-md-offset-2">
						  <font color="#00008B" size=4>Call Area -</font> <font color="#ff0000" size=4> {{ $post->p_o }} </font><br>
                   <font color="#00008B" size=4>Arrival Area -</font> <font color="#ff0000" size=4> {{ $post->p_p }} </font><br>
                    <font color="#00008B" size=4>Order cost -</font> <font color="#ff0000" size=4> {{ $post->val }}р. </font><br>
						<font color="#000000" size=5> Are you sure you want to accept this order?</font>
						</div>	
						 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" >
                                    Yes
                                </button>
                                
                                <a href="/en" class="btn btn-primary">
                                    No
                                </a>
                            </div>
                        </div>			
                        <div  class="form-group{{ $errors->has('p_o') ? ' has-error' : '' }}" >
                            <label for="p_o" class="col-md-4 control-label"></label>
 
                            <div class="col-md-6">
                     <input id="p_o" type="hidden" class="form-control" name="p_o" readonly="" value="{{ old('p_o', $post->p_o) }}" required autofocus>
                                @if ($errors->has('p_o'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_o') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
 <div class="form-group{{ $errors->has('p_p') ? ' has-error' : '' }}">
                            <label for="p_p" class="col-md-4 control-label"></label>
 
                            <div class="col-md-6">
<input id="p_p" type="hidden" class="form-control" name="p_p" readonly="" value="{{ old('p_p', $post->p_p) }}" required autofocus>
                                @if ($errors->has('p_p'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('p_p') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
            
             <div class="form-group{{ $errors->has('val') ? ' has-error' : '' }}">
                            <label for="val" class="col-md-4 control-label"></label>
 
                            <div class="col-md-6">
                                <input   type="hidden" class="form-control" name="val" readonly="" value="{{ old('val', $post->val) }}" required autofocus>
 
                                @if ($errors->has('val'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('val') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
               <div class="form-group">
                           <!-- <label for="stat" class="col-md-4 control-label">Новый статус</label> -->
 							
                            <div class="col-md-6">
                                <input style="visibility: hidden" id="stat" type="radio" checked="Выполняется" class="form-control" name="stat" readonly="" value="Выполняется" required autofocus>
                            </div>
                        </div>
               
               <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label"></label>
 
                            <div class="col-md-6">
                                <input id="phone" type="hidden" class="form-control" name="phone" value="{{ old('phone', $post->phone) }}" required autofocus>
 
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label"></label>

 
                            <div class="col-md-6">
                                <textarea style="visibility: hidden"  name="body" id="body" class="form-control" required autofocus>{{ old('body', $post->body) }}</textarea>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection