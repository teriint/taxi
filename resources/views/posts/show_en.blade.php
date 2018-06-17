@extends('layouts.app_en')
 
@section('content')
<div class="container" id="adm">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Order № {{ $post->id }}</h3>
                    <a class="pull-right btn btn-sm btn-primary" href="/en">Return</a>
                </div>
 
                <div class="panel-body" >
                    <font color="#00008B" size=4>Call Area -</font> <font color="#ff0000" size=4> {{ $post->p_o }} </font><br>
                   <font color="#00008B" size=4>Arrival Area -</font> <font color="#ff0000" size=4> {{ $post->p_p }} </font><br>
                    <font color="#00008B" size=4>Order cost -</font> <font color="#ff0000" size=4> {{ $post->val }}р. </font><br>
                    <font color="#00008B" size=4>Order status -</font> <font color="#ff0000" size=4> {{ $post->stat }} </font><br>
                    <font color="#00008B" size=4>Client's number -</font>   <font color="#ff0000" size=4> +{{ $post->phone }} </font><br>
                    <font color="#00008B" size=4>Additional Information -</font>	 <font color="#ff0000" size=4> {{ $post->body }} </font><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection