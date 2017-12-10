@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Заказ № {{ $post->id }}</h3>
                    <a class="pull-right btn btn-sm btn-primary" href="{{ route('list_posts') }}">Вернуться</a>
                </div>
 
                <div class="panel-body" >
                    <font color="#00008B" size=4>Район вызова -</font> <font color="#ff0000" size=4> {{ $post->p_o }} </font><br>
                   <font color="#00008B" size=4> Район прибытия -</font> <font color="#ff0000" size=4> {{ $post->p_p }} </font><br>
                    <font color="#00008B" size=4>Стоимость заказа -</font> <font color="#ff0000" size=4> {{ $post->val }}р. </font><br>
                    <font color="#00008B" size=4>Статус заказа -</font> <font color="#ff0000" size=4> {{ $post->stat }} </font><br>
                    <font color="#00008B" size=4>Номер клиента -</font>   <font color="#ff0000" size=4> +{{ $post->phone }} </font><br>
                    <font color="#00008B" size=4>Дополнительная информация -</font>	 <font color="#ff0000" size=4> {{ $post->body }} </font><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection