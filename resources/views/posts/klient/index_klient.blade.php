@extends('layouts.app')
 
@section('content')
@guest
@else
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                Имеющиеся заказы
                    @can('create-post')
                    <a class="pull-right btn btn-sm btn-primary" href="{{ route('create_post') }}">Создать новый заказ</a>
                    @endcan
                </div>
 
                <div class="panel-body">
                    <div class="row">
                    @foreach($posts as $post)

                        <div class="col-sm-4 col-md-offset-1">
                            <div class="thumbnail">
                            <div class="caption">
                                <a href="{{ route('show_post', ['id' => $post->id]) }}"> Заказ № {{ $post->id }}</a>	
                                <p>{{ str_limit($post->p_o, 50) }} - {{ str_limit($post->p_p	, 50) }}</p>
                                <p><font color="#ff0000" size=4>{{ $post->stat }}</font></p>
                                
                                
                                @can('update-post', $post)
                                <p>
                                <a href="{{ route('show_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Просмотреть заказ</a> 
                                </p>
                                @endcan
								
								@can('update-post', $post)
                                <p>
                                    <a href="{{ route('edit_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Редактировать заказ</a> 
                                </p>
                                @endcan
								
                                @can('update-status-post', $post)
                                <p>
                                <a href="{{ route('edit_status_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Принять</a> 
                                </p>
                                @endcan

                                @can('update-ok-post', $post)
                                <p>
                                <a href="{{ route('edit_ok_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Завершить</a>
                                </p>
                                
                                @endcan
                          
                            </div>
                            
                            </div>
                        </div>
                        
                          

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
@endsection
