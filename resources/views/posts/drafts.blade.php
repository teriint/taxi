@extends('layouts.app')
 
@section('content')
<div class="container" id="adm">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Заказы в обработке <a class="btn btn-sm btn-default pull-right" href="{{ route('list_posts') }}">На главную</a>
                </div>
 				
                <div class="panel-body">
                    <div class="row">
                    @foreach($posts as $post)
                        <div class="col-sm-4 col-md-offset-1">
                            <div class="thumbnail">
                            <div class="caption">
                                <a href="{{ route('show_post', ['id' => $post->id]) }}"> Заказ № {{ $post->id }}</a>	
                                <p>{{ str_limit($post->p_o, 50) }} - {{ str_limit($post->p_p	, 50) }}</p>
                                <p>Стоимость поездки:   {{ $post->val }}р. </p>
                                <p>№ заказчика:   +{{ $post->phone }} </p>
                                <p><font color="#ff0000" 	size=4>{{ $post->stat }}</font></p>
                                
                                <p>
                                @can('publish-post')
                                    <a href="{{ route('publish_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Опубликовать</a> 
                                @endcan
                                
                                    
                                </p>
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
@endsection