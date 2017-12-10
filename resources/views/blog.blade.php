@extends('layouts.app')
 
@section('content')
<div class='container' id="adm">
<div class="form-group">
		<p><a href="/posts/create" class="btn btn-block btn-primary">Добавить новый пост</a></p>
		<!-- <p><a href="/posts/create" class="btn btn-block btn-primary">Загрузка данных из файла</a></p>-->
	</div>
<div class="row" >
    @foreach ($posts as $post)
     <div class="col-md-4">
     	<h2>{{ $post->topic }}</h2>
     	<p>{{ $post->alias }}</p>
     	<p><a href="/posts/{{$post->id}}" class="btn btn-block btn-default">Читать далее</a></p>
     	<p><a href="/posts/{{$post->id}}/edit" class="btn btn-block btn-primary">Редактировать</a></p>
     	<form action="/posts/{{$post->id}}" method="post">
     	{{csrf_field()}}
     	{!! method_field('delete') !!}
     	<button class="form-control btn btn-block btn-danger" type="text" type="submit">Удалить</button>
     	</form>
     </div>
    
    @endforeach 
     </div>
</div>
@endsection